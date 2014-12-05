<?php namespace EventCalendar;

use Route, Input, Redirect;

class ApiEventController extends BaseController {
    
    // TODO: Find a way to move the redirects out of the controllers
    
    protected static $IMAGE_FOLDER = 'public/images/uploads/';
    
    
    public function create() {
        $event = new Event();        
        $event->name = Input::get('name');
        $event->genre_id = Input::get('genre');
        $event->description = Input::get('description');
        $event->duration = Input::get('duration');
        $event->cast = Input::get('cast');
        // TODO__: Event has no id yet 
        $event->image_path = self::saveImage('image', $event);
        $event->image_description = Input::get('image-description');
        
        // Validate input
        if ($event->getValidator()->fails()) {
            return Redirect::to('events')->withErrors($event->getValidator());
        }
        
        // Save model
        $event->save();
        
        // Redirect
        return Redirect::to('events')->with(array('title' => 'Event created',
          'success' => "The event \"$event->name\" has been created successfully."));
    }
    
    public function update() {
        $event = Event::find(Route::input('id'));        
        $event->name = Input::get('name');
        $event->genre_id = Input::get('genre');
        $event->description = Input::get('description');
        $event->duration = Input::get('duration');
        $event->cast = Input::get('cast');
        $event->image_path = self::saveImage('image', $event);
        $event->image_description = Input::get('image-description');
        
        // Validate input
        if ($event->getValidator()->fails()) {
            return Redirect::to('events')->withErrors($event->getValidator());
        }
        
        // Save model
        $event->save();
        
        // Redirect
        return Redirect::to('events')->with(array('title' => 'Event updated',
          'success' => "The event \"$event->name\" has been updated successfully."));
    }
    
    public function delete() {
        $event = Event::find(Route::input('id'));
        
        // Delete files
        unlink(self::$IMAGE_FOLDER . $event->image_path);
        
        // Delete model
        $event->delete();
        
        // Redirect
        return Redirect::to('events')->with(array('title' => 'Event deleted',
          'success' => "The event \"$event->name\" has been deleted successfully."));
    }
    
    
    protected static function saveImage($inputName, $event) {
        if (!Input::hasFile($inputName)) {
            return null;
        }
        
        $image = Input::file('image');
        if (!$image->isValid()) {
            return null;
        }
        
        $imagePath = $event->id . '_logo.' . $image->getClientOriginalExtension();        
        $image->move(self::$IMAGE_FOLDER, $imagePath);
        
        return $imagePath;
    }
    
}
