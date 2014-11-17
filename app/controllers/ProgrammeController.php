<?php namespace EventCalendar;

use View;

class ProgrammeController extends BaseController {
    
    public function index()	{
        $upcommingEvents = Event::all();
        
        return View::make('programme')->with('events', $upcommingEvents);
    }
    
}
