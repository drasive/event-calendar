<?php namespace EventCalendar;

class PriceGroup extends BaseModel {

    // Setup
    protected $table = 'PriceGroups'; // Default would be "Price_Groups"
    protected $guarded = array('Id');
	
	// Relations
	public function events() {
        return $this->belongsToMany('EventCalendar\Event', 'Event_PriceGroups', 'PriceGroup_Id', 'Event_Id');
    }
}
