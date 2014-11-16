<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    // Setup
    protected $table = 'Users';
    protected $guarded = array('Id', 'Username', 'Password');
    protected $hidden = array('password', 'remember_token');

}
