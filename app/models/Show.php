<?php namespace EventCalendar;

use LaravelBook\Ardent\Ardent;
use Validator;

class Show extends Ardent {
    
    // Setup
    protected $fillable = array('date', 'time');
    
	// Relations
	public function event() {
        return $this->belongsTo('Event');
    }
	
    // Methods
    public function getValidator() {
        return Validator::make(
            array(
                'date' =>       date('', strtotime($this->date)),
                'time' =>       date('H:i', strtotime($this->time))
            ),
            array(
                'date' =>       'required|date',
                'time' => array('required', 'regex:/^([01]?[0-9]|2[0-3]):([0-5][0-9])$/'),
            )
        );
    }
    
}
