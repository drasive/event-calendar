<?php

class PriceGroup extends BaseModel {

    // Setup
    protected $table = 'PriceGroups';
    protected $guarded = array('Id');
	
	// Relations
	public function events() {
        return $this->belongsToMany('Event', 'Event_PriceGroups', 'PriceGroup_Id', 'Event_Id');
    }
}
