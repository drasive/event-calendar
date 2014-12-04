<?php namespace EventCalendar;

class Link extends BaseModel {
    
    // Setup
    protected $guarded = array('id', 'event_id');
    
    // Relations
    public function event() {
        return $this->belongsTo('Event');
    }
    
}
