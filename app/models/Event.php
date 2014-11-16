<?php

class Event extends BaseModel {

    // Setup
    protected $table = 'Events';
    protected $guarded = array('Id');

	// Relations
	public function genres() {
      return $this->hasMany('Genre');
    }
	
	public function priceGroups() {
        return $this->belongsToMany('PriceGroup', 'Event_PriceGroups', 'Event_Id', 'PriceGroup_Id');
    }
	
	public function shows() {
      return $this->hasMany('Show');
    }
	
	public function links() {
      return $this->hasMany('Link');
    }	
	
}
