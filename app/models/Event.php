<?php namespace EventCalendar;

class Event extends BaseModel {

    // Setup
    protected $guarded = array('id');

	// Relations
	public function genre() {
	    return $this->belongsTo('EventCalendar\Genre');
    }
	
	public function priceGroups() {
        return $this->belongsToMany('EventCalendar\PriceGroup');
    }
	
	public function shows() {
        return $this->hasMany('EventCalendar\Show');
    }
	
	public function links() {
        return $this->hasMany('EventCalendar\Link');
    }	
	
}
