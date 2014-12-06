<?php namespace EventCalendar;

use Illuminate\Database\Eloquent\Collection;
use Route, Input, Redirect;

class ApiEventController extends BaseController {
    
    // TODO: Find a way to move the redirects out of the controllers
    
    private static $IMAGE_FOLDER = 'public/images/uploads/';
    
    
    public static function create() {
        $event = self::buildEvent(new Event());
        $shows = self::buildShows();
        $links = self::buildLinks();
        
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
    
    public static function update() {
        $event = self::buildEvent(Event::find(Route::input('id')));
        $shows = self::buildShows();
        $links = self::buildLinks();
        // TODO: __Update shows and links
        
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
    
    public static function delete() {
        $event = Event::find(Route::input('id'));
        
        // Delete files
        unlink(self::$IMAGE_FOLDER . $event->image_path);
        
        // Delete model
        $event->delete();
        
        // Redirect
        return Redirect::to('events')->with(array('title' => 'Event deleted',
          'success' => "The event \"$event->name\" has been deleted successfully."));
    }
    
    
    private static function buildEvent($event) {
        $event->name = Input::get('name');
        $event->genre_id = Input::get('genre');
        $event->description = Input::get('description');
        $event->duration = Input::get('duration');
        $event->cast = Input::get('cast');
        $event->image_path = self::saveImage();
        $event->image_description = Input::get('image-description');
        
        return $event;
    }
    
    private static function buildShows() {
        $shows = new Collection();
        
        $dates = Input::get('show-date');        
        $times = Input::get('show-time');
        if ($dates == null) { 
            return new Collection();
        }
        
        foreach ($dates as $index => $date) {
            $show = new Show(array('date' => $dates[$index], 'time' => $times[$index]));
            $shows->push($show);
        }
        
        return $shows;
    }
    
    private static function buildLinks() {
        $links = new Collection();
        
        $urls = Input::get('link-url');
        $names = Input::get('link-name');        
        if ($urls == null) {
            return new Collection();
        }
        
        foreach ($urls as $index => $url) {
            $link = new Link(array('url' => $urls[$index], 'name' => $names[$index]));
            $links->push($link);
        }
        
        return $links;
    }
    
    private static function saveImage() {
        if (!Input::hasFile('image')) {
            return null;
        }
        
        $image = Input::file('image');
        if (!$image->isValid()) {
            return null;
        }
        
        // Generate a random file name
        while (true) {
            $fileName = uniqid(rand(), true) . '.' . $image->getClientOriginalExtension();
            
            if (!file_exists(self::$IMAGE_FOLDER . $fileName)) {
                break;
            }
        }    
        $image->move(self::$IMAGE_FOLDER, $fileName);
        
        return $fileName;
    }
    
}
