<?php namespace EventCalendar;

use Route;
use Redirect;
use Input;

class ApiGenreController extends BaseController {
    
    public function create() {
        $genre = new Genre();
        
        $name = Input::get('name');
        $genre->name = $name;
        $genre->save();
        
        return Redirect::to('genres');
    }
    
    public function update() {
        $id = Route::input('id');
        $genre = Genre::find($id);
        
        $name = Input::get('name');
        $genre->name = $name;
        $genre->save();
        
        return Redirect::to('genres');
    }
    
    public function delete() {
        $id = Route::input('id');
        $genre = Genre::find($id);
        
        $genre->delete();
        
        return Redirect::to('genres');
    }
    
}
