<?php namespace EventCalendar;

use LaravelBook\Ardent\Ardent;
use Validator;

class Link extends Ardent {
    
    // Setup
    protected $fillable = array('event_id', 'name', 'url');
    
    // Relations
    public function event() {
        return $this->belongsTo('Event');
    }
    
    // Methods
    public function getValidator() {
        return Validator::make(
            array(
                'name' => $this->name,
                'url' =>  $this->url
            ),
            array(
                'name' => 'between:0,50',
                'url' =>  'required|between:5,255|url'
            )
        );
    }
    
}
