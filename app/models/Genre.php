<?php namespace EventCalendar;

use LaravelBook\Ardent\Ardent;
use Validator;

class Genre extends Ardent {
    
    // Relations
    public function events() {
        return $this->hasMany('EventCalendar\Event');
    }
    
    // Methods
    public function getValidator() {
        return Validator::make(
            array(
                'name' => $this->name
            ),
            array(
                'name' => 'required|between:2,50'
            )
        );
    }
    
}
