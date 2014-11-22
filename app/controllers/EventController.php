<?php namespace EventCalendar;

use Route, View;

class EventController extends BaseController {
    
    public function index() {
        // TODO: Order by date
        $events = Event::orderBy('name')->get();
        
        return View::make('events')->with('events', $events);
    }
    
    public function create() {
        $genreList = Genre::lists('name', 'id');
        
        return View::make('events.create', array('genreList' => $genreList));
    }
    
    public function edit() {
        $event = Event::find(Route::input('id'));
        $genreList = Genre::lists('name', 'id');
        
        return View::make('events.edit', array('event' => $event, 'genreList' => $genreList));
    }
    
    public function delete() {
        $event = Event::find(Route::input('id'));
        
        return View::make('events.delete', array('event' => $event));
    }
    
}
