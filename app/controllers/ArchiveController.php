<?php namespace EventCalendar;

use Controller, View, Input, Paginator;

class ArchiveController extends Controller {
    
    public function index()	{
        // TODO: Is this the correct behaviour?
        // Get events with at least one show
        $events = Event::has('shows')->get();
        
        // Filter out upcoming events
        $events = $events->filter(function ($event) {
            if (strtotime($event->lastShow()->date . ' ' . $event->lastShow()->time) < time()) {
                return true;
            }
        });
         
         
        // Get genres that are associated with at least one event
        $genres = Genre::has('events')->get();
        
        // Filter out genres that are not associated with any event
        $genres = $genres->filter(function ($genre) use ($events) {
            foreach ($events as $event) {
                if ($event->genre->id == $genre->id) {
                    return true;
                }
            }
        });
        
        
        // Get selected genre
        $selectedGenreId = Input::get('genre-id');
        $selectedGenre = is_null($selectedGenreId) ? null : Genre::find($selectedGenreId);
        
        $eventCountUnfiltered = count($events);
        if (!is_null($selectedGenre)) {
            // Filter out events with wrong genre
            $events = $events->filter(function ($event) use ($selectedGenre) {
                if ($event->genre_id == $selectedGenre->id) {
                    return true;
                }
            });
        }
        
        // Sort events chronologically
        $events = $events->sortBy(function ($event) {
            return strtotime($event->firstShow()->date . ' ' . $event->firstShow()->time);
        });
        
        
        // Create paginator
        $eventsPerPage = 10;
        $currentPage = is_null(Input::get('page')) ? 1 : Input::get('page');
        $eventsOnPage = $events->slice(($currentPage - 1) * $eventsPerPage, $eventsPerPage);
        $paginator = Paginator::make($eventsOnPage->all(), count($events), $eventsPerPage);
        
        
        // Return
        return View::make('archive', array('events' => $eventsOnPage, 'eventCountUnfiltered' => $eventCountUnfiltered,
                                           'genres' => $genres, 'selectedGenre' => $selectedGenre,
                                           'paginator' => $paginator));
    }
    
}
