<?php namespace EventCalendar;

class Event extends BaseModel {

    // Setup
    protected $guarded = array('Id');

	// Relations
	public function genre() {
	    return $this->belongsTo('EventCalendar\Genre', 'Genre_Id');
    }
	
	public function priceGroups() {
        return $this->belongsToMany('EventCalendar\PriceGroup', 'Event_PriceGroups', 'Event_Id', 'PriceGroup_Id');
    }
	
	public function shows() {
        return $this->hasMany('EventCalendar\Show');
    }
	
	public function links() {
        return $this->hasMany('EventCalendar\Link');
    }	
	
}
