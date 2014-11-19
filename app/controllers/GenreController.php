<?php namespace EventCalendar;

use View;
use Route;
use Redirect;

class GenreController extends BaseController {
    
    public function index() {
        $genres = Genre::orderBy('name')->get();
        
        return View::make('genres')->with('genres', $genres);
    }
    
    public function create() {
        return View::make('genres.create');
    }
    
    public function edit() {
        $id = Route::input('id');
        $genre = Genre::find($id);
        
        return View::make('genres.edit')->with('genre', $genre);
    }
    
    public function delete() {
        $id = Route::input('id');
        $genre = Genre::find($id);
        
        return View::make('genres.delete')->with('genre', $genre);
    }
    
}
