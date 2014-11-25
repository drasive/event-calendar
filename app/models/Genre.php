<?php namespace EventCalendar;

use Validator;

class Genre extends BaseModel {
    
    // Setup
    protected $fillable = array('name');
    
    // Relations
    public function events() {
        return $this->hasMany('EventCalendar\Event');
    }
    
    // Validation
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
