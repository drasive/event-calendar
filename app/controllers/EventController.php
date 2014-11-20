<?php namespace EventCalendar;

use Route, View;

class EventController extends BaseController {
    
    public function index() {
        // TODO: Order by date
        $events = Event::orderBy('name')->get();
        
        return View::make('events')->with('events', $events);
    }
    
    public function create() {
        return View::make('events.create');
    }
    
    public function edit() {
        $event = Event::find(Route::input('id'));
        
        return View::make('events.edit')->with('event', $event);
    }
    
    public function delete() {
        $event = Event::find(Route::input('id'));
        
        return View::make('events.delete')->with('event', $event);
    }
    
}
