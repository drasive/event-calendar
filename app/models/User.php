<?php namespace EventCalendar;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {
    
    use UserTrait, RemindableTrait;
    
    // Setup
    protected $guarded = array('id', 'email', 'password');
    protected $hidden = array('password', 'remember_token');
    
}
