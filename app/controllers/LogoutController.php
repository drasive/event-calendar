<?php namespace EventCalendar;

use Controller, Auth, Redirect;

class LogoutController extends Controller {
    
    public function index()	{
        Auth::logout();
        
        return Redirect::intended('/')->with(array('success' => "You have been logged out."));
    }
    
}
