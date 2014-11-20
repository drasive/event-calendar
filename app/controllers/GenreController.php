<?php namespace EventCalendar;

use Route, View;

class GenreController extends BaseController {
    
    public function index() {
        $genres = Genre::orderBy('name')->get();
        
        return View::make('genres')->with('genres', $genres);
    }
    
    public function create() {
        return View::make('genres.create');
    }
    
    public function edit() {
        $genre = Genre::find(Route::input('id'));
        
        return View::make('genres.edit')->with('genre', $genre);
    }
    
    public function delete() {
        $genre = Genre::find(Route::input('id'));
        
        return View::make('genres.delete')->with('genre', $genre);
    }
    
}
