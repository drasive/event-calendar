<?php namespace EventCalendar;

class Genre extends BaseModel {

    // Setup
    protected $guarded = array('id');
	
	// Relations
	public function event() {
        return $this->belongsTo('Event');
    }
	
	// Validation
	public static $rules = array(
        'Name' => 'required|between:2,50'
    );

}
