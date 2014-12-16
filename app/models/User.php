<?php namespace EventCalendar;

use LaravelBook\Ardent\Ardent;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Ardent implements UserInterface, RemindableInterface {
    
    use UserTrait, RemindableTrait;
    
    // Setup
    protected $hidden = array('password', 'remember_token');
    
}
