<?php namespace EventCalendar;

use View;

class AboutController extends BaseController {
    
    public function index() {
        return View::make('about');
    }
    
}
