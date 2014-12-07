<?php namespace EventCalendar;

use Controller, Route, Input, Redirect;

class ApiGenreController extends Controller {
    
    public function create() {
        $genre = new Genre();
        $genre->name = Input::get('name');
        
        // Validate input
        if ($genre->getValidator()->fails()) {
            return Redirect::to('genres')->withErrors($genre->getValidator());
        }
        
        // Save model
        $genre->save();
        
        // Redirect
        return Redirect::to('genres')->with(array('title' => 'Genre created',
          'success' => "The genre \"$genre->name\" has been created successfully."));
    }
    
    public function update() {
        $genre = Genre::find(Route::input('id'));
        $genre->name = Input::get('name');
        
        // Validate input
        if ($genre->getValidator()->fails()) {
            return Redirect::to('genres')->withErrors($genre->getValidator());
        }
        
        // Save model
        $genre->save();
        
        // Redirect
        return Redirect::to('genres')->with(array('title' => 'Genre updated',
          'success' => "The genre \"$genre->name\" has been updated successfully."));
    }
    
    public function delete() {
        $genre = Genre::find(Route::input('id'));
        
        // Delete model
        $genre->delete();
        
        // Redirect
        return Redirect::to('genres')->with(array('title' => 'Genre deleted',
          'success' => "The genre \"$genre->name\" has been deleted successfully."));
    }
    
}
