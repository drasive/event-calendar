<?php namespace EventCalendar;

use View;

class GenreController extends BaseController {
    
    public function index()	{
        $genres = Genre::all();
        
        return View::make('genres')->with('genres', $genres);
    }
    
}
