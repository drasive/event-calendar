<?php

class Show extends BaseModel {

    // Setup
    protected $table = 'Shows';
    protected $guarded = array('Id', 'Event_Id');

	// Relations
	public function event() {
        return $this->belongsTo('Event');
    }
	
}
