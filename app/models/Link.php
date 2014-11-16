<?php

class Link extends BaseModel {

    // Setup
    protected $table = 'Links';
    protected $guarded = array('Id', 'Event_Id');

	// Relations
	public function event() {
        return $this->belongsTo('Event');
    }
	
}
