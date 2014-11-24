<?php namespace EventCalendar;

use View;

class ProgrammeController extends BaseController {
    
    public function index()	{
        $upcommingEvents = Event::all();
        
        // TODO: Is this the correct behaviour?
        // Filter events without shows
        $upcommingEvents = $upcommingEvents->filter(function ($event) {
            if (count($event->shows) > 0) {
                return true;
            }
        });
        
        // Filter past events
        $upcommingEvents = $upcommingEvents->filter(function ($event) {
            if (strtotime($event->lastShow()->date . ' ' . $event->lastShow()->time) > time()) {
                return true;
            }
        });
        
        // Sort events chronologically
        $upcommingEvents = $upcommingEvents->sortBy(function ($event) {
            return strtotime($event->firstShow()->date . ' ' . $event->firstShow()->time);
        });
        
        // TODO: Genre filter
        // TODO: Paging
        
        return View::make('programme', array('events' => $upcommingEvents));
    }
    
}
