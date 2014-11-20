<?php namespace EventCalendar;

use Route, Input, Redirect;

class ApiEventController extends BaseController {
    
    // TODO: Find a way to move the redirects out of the controllers
    
    public function create() {
        $event = new Event();
        
        $event->name = Input::get('name');
        $event->description = Input::get('description');
        $event->duration = Input::get('duration');
        $event->cast = Input::get('cast');
        $event->image_path = ''; // TODO:
        $event->image_description = Input::get('image-description');
        $event->save();
        
        return Redirect::to('events')->with(array('title' => 'Event created',
          'success' => "The event \"$event->name\" has been created successfully."));
    }
    
    public function update() {
        $event = Event::find(Route::input('id'));
        
        $event->name = Input::get('name');
        $event->description = Input::get('description');
        $event->duration = Input::get('duration');
        $event->cast = Input::get('cast');
        $event->image_path = ''; // TODO:
        $event->image_description = Input::get('image-description');
        $event->save();
        
        return Redirect::to('events')->with(array('title' => 'Event updated',
          'success' => "The event \"$event->name\" has been updated successfully."));
    }
    
    public function delete() {
        $event = Event::find(Route::input('id'));
        
        $event->delete();
        
        return Redirect::to('events')->with(array('title' => 'Event deleted',
          'success' => "The event \"$event->name\" has been deleted successfully."));
    }
    
}
