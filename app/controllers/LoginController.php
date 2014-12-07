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
            return Redirect::intended('/');
        }
        
        return Redirect::intended('/login');
    }
    
}
