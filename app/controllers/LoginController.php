<?php namespace EventCalendar;

use Controller, View, Input, Auth, Redirect;

class LoginController extends Controller {
    
    public function index()	{
        return View::make('login');
    }
    
    public function authenticate() {
        $email = Input::get('email');
        $password = Input::get('password');
        $remember = Input::get('remember');
        
        if (Auth::attempt(array('email' => $email, 'password' => $password), $remember)) {
            return Redirect::intended('/')->with(array('success' => 'You have been logged in.'));
        }
        
        return Redirect::intended('/login')->with(array('warning' => "The username or password is incorrect."));
    }
    
}
