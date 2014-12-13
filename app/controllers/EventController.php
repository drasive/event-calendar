<?php namespace EventCalendar;

use Controller, Route, View;

class EventController extends Controller {
    
    public function index() {
        // Get all events
        $events = Event::all();
        
        // Sort events
        $events = $events->sortByDesc(function ($event) {
            // Put events without shows at the beginning
            if ($event->firstShow() === null) {
                return 999999999999;
            }
            
            return strtotime($event->firstShow()->date . ' ' . $event->firstShow()->time);
        });
        
        return View::make('events', array(
          'events' => $events));
    }
    
    public function create() {
        $genreList = Genre::lists('name', 'id');
        $priceGroups = PriceGroup::all();
        $priceGroupsUsed = array();
        
        return View::make('events.create', array(
          'genreList' => $genreList,
          'priceGroups' => $priceGroups,
          'priceGroupsUsed' => $priceGroupsUsed));
    }
    
    public function edit() {
        $event = Event::find(Route::input('id'));
        $genreList = Genre::lists('name', 'id');
        $priceGroups = PriceGroup::all();
        $priceGroupsUsed = $event->priceGroups()->lists('id');
        
        return View::make('events.edit', array(
          'event' => $event, 'genreList' => $genreList,
          'priceGroups' => $priceGroups,
          'priceGroupsUsed' => $priceGroupsUsed));
    }
    
    public function delete() {
        $event = Event::find(Route::input('id'));
        
        return View::make('events.delete', array(
          'event' => $event));
    }
    
}
