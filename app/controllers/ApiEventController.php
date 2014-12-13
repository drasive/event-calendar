<?php namespace EventCalendar;

use Illuminate\Database\Eloquent\Collection;
use Controller, Route, Input, Redirect;

class ApiEventController extends Controller {
    
    // TODO: Move anything not related to the API (Messages, Redirections, ..) out of the API controllers
    
    private static $IMAGE_FOLDER = 'public/images/uploads/';
    
    
    public static function create() {
        $event = self::buildEvent(new Event());
        
        // Validate input
        if ($event->getValidator()->fails()) {
            return Redirect::to('events')->withErrors($event->getValidator());
        }
        
        // Save models
        $event->save();
        self::savePriceGroups($event);
        
        $shows = self::buildShows($event);
        self::saveShows($shows, $event);
        
        $links = self::buildLinks($event);
        self::saveLinks($links, $event);
        
        // Save files
        self::saveImage($event->image_path);
        
        // Redirect
        return Redirect::to('events')->with(array('title' => 'Event created',
          'success' => "The event \"$event->name\" has been created successfully."));
    }
    
    public static function update() {
        $event = self::buildEvent(Event::find(Route::input('id')));
        
        // Validate input
        if ($event->getValidator()->fails()) {
            return Redirect::to('events')->withErrors($event->getValidator());
        }
        
        // Save models
        $event->save();
        self::savePriceGroups($event);
        
        $shows = self::buildShows($event);
        self::saveShows($shows, $event);
        
        $links = self::buildLinks($event);
        self::saveLinks($links, $event);
        
        // Save files
        if (Input::hasFile('image')) {
            // TODO: The new image gets saved with a new file name but the existing image doesn't get deleted
            // > delete the old file or reuse the file name
            self::saveImage($event->image_path);
        }
        
        // Redirect
        return Redirect::to('events')->with(array('title' => 'Event updated',
          'success' => "The event \"$event->name\" has been updated successfully."));
    }
    
    public static function delete() {
        $event = Event::find(Route::input('id'));
        
        // Delete files
        unlink(self::$IMAGE_FOLDER . $event->image_path);
        
        // Delete models
        $event->delete();
        // Child entities are deleted by database cascades
        
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
        if (Input::hasFile('image')) {
            $event->image_path = self::generateImageFileName();
        }
        $event->image_description = Input::get('image-description');
        
        return $event;
    }
    
    private static function buildShows($event) {
        $shows = new Collection();
        
        $dates = Input::get('show-date');
        $times = Input::get('show-time');
        if ($dates == null) { 
            return new Collection();
        }
        
        foreach ($dates as $index => $date) {
            $show = new Show(array('event_id' => $event->id, 'date' => $dates[$index], 'time' => $times[$index]));
            $shows->push($show);
        }
        
        return $shows;
    }
    
    private static function buildLinks($event) {
        $links = new Collection();
        
        $urls = Input::get('link-url');
        $names = Input::get('link-name');
        if ($urls == null) {
            return new Collection();
        }
        
        foreach ($urls as $index => $url) {
            $link = new Link(array('event_id' => $event->id, 'url' => $urls[$index], 'name' => $names[$index]));
            $links->push($link);
        }
        
        return $links;
    }
    
    
    private static function savePriceGroups($event) {
        // TODO: __Implement saving the selection
        
        $priceGroups = Input::get('price-group');
        //dd($priceGroups);
        foreach ($priceGroups as $index => $priceGroup) {
            
        }
    }
    
    private static function saveImage($fileName) {
        if ($fileName == null) {
            return;
        }
        
        $image = Input::file('image');
        $image->move(self::$IMAGE_FOLDER, $fileName);
    }
    
    private static function generateImageFileName() {
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
        
        return $fileName;
    }
    
    // TODO: Improve method to update event shows
    private static function saveShows($shows, $event) {
        // This method requires to a lot of unnecessary database access and
        // makes the timestamps useless, but is faster to implement than
        // a more robust and performance oriented solution.
        
        \DB::transaction(function() use ($shows, $event) {
            // Delete all existing shows
            $event->shows()->delete();
            
            // Create the new shows 
            foreach ($shows as $show) {
                $show->save();
            }
        });
    }
    
    // TODO: Improve method to update event links
    private static function saveLinks($links, $event) {
        // This method requires to a lot of unnecessary database access and
        // makes the timestamps useless, but is faster to implement than
        // a more robust and performance oriented solution.
        
        \DB::transaction(function() use ($links, $event) {
            // Delete all existing links
            $event->links()->delete();
            
            // Create the new links
            foreach ($links as $link) {
                $link->save();
            }
        });
    }
    
}
