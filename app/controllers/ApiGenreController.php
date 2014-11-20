<?php namespace EventCalendar;

use Route, Input, Redirect;

class ApiGenreController extends BaseController {
    
    // TODO: Find a way to move the redirects out of this controller
    
    public function create() {
        $genre = new Genre();
        
        $genre->name = Input::get('name');
        $genre->save();
        
        return Redirect::to('genres')->with(array('title' => 'Genre created',
          'success' => "The genre \"$genre->name\" has been created successfully."));
    }
    
    public function update() {
        $genre = Genre::find(Route::input('id'));
        
        $genre->name = Input::get('name');
        $genre->save();
        
        return Redirect::to('genres')->with(array('title' => 'Genre updated',
          'success' => "The genre \"$genre->name\" has been updated successfully."));
    }
    
    public function delete() {
        $genre = Genre::find(Route::input('id'));
        
        $genre->delete();
        
        return Redirect::to('genres')->with(array('title' => 'Genre deleted',
          'success' => "The genre \"$genre->name\" has been deleted successfully."));
    }
    
}
