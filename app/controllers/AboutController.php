<?php namespace EventCalendar;

use Controller, View;

class AboutController extends Controller {
    
    public function index() {
        return View::make('about');
    }
    
}
