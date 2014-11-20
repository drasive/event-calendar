<?php namespace EventCalendar;

class PriceGroup extends BaseModel {

    // Setup
    protected $fillable = array('name', 'price');
    
    // Relations
    public function events() {
        return $this->belongsToMany('EventCalendar\Event');
    }
    
}
