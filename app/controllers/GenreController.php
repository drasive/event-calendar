<?php namespace EventCalendar;

use View;
use Route;
use Redirect;

class GenreController extends BaseController {
    
    public function index() {
        $genres = Genre::all();
        
        return View::make('genres')->with('genres', $genres);
    }
    
    public function asd() {
        // "new"
        
        //$id = Route::input('id');
        //
        //return View::make('')->with('genres', $genres);
    }
    
    public function edit() {
        $id = Route::input('id');
        $genre = Genre::find($id);
        
        return View::make('genres.edit')->with('genre', $genre);
    }
    
    
    public function create() {
        //$id = Route::all('id');
        //
        //return View::make('')->with('genres', $genres);
    }
    
    public function update() {
        //$id = Route::input('id');
        //
        ////Genre::delete($id);
        //
        //return Redirect::to('genres');
    }
    
    public function delete() {
        // TODO: __Ask for confirmation, show success/ error message
        $id = Route::input('id');
        
        $genre = Genre::find($id);
        $genre->delete();
        
        return Redirect::to('genres');
    }
    
}
