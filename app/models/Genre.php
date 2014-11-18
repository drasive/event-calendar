<?php namespace EventCalendar;

class Genre extends BaseModel {

    // Setup
    protected $guarded = array('id');
	
	// Relations
	public function events() {
        return $this->hasMany('EventCalendar\Event');
    }
	
	// Validation
	public static $rules = array(
        'Name' => 'required|between:2,50'
    );

}
