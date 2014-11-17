<?php namespace EventCalendar;

class Show extends BaseModel {

    // Setup
    protected $guarded = array('Id', 'Event_Id');

	// Relations
	public function event() {
        return $this->belongsTo('Event');
    }
	
}
