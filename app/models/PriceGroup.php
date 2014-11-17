<?php namespace EventCalendar;

class PriceGroup extends BaseModel {

    // Setup
    protected $guarded = array('id');
	
	// Relations
	public function events() {
        return $this->belongsToMany('EventCalendar\Event');
    }
}
