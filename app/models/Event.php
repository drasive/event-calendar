<?php namespace EventCalendar;

use Validator;

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
    
    // Methods
    public function getValidator() {
        return Validator::make(
            array(
                'name' => $this->name,
                'description' => $this->description,
                'duration' => $this->duration,
                'cast' => $this->cast,
                'image_description' => $this->image_description
            ),
            array(
                'name' =>              'required|between:2,150',
                'description' =>       'required|between:12,500',
                'duration' =>    array('required', 'regex:/^([01]?[0-9]|2[0-3]):([0-5][0-9])$/'),
                'cast' =>              'between:0,500',
                'image_description' => 'between:0,250'
            )
        );
    }
    
    
    public function firstShow() {
       // PERF: Using a dedicated query to select a single show instead of using the result of the shows() method.
       return Show::where('event_id', '=', $this->id)->orderBy('date', 'ASC')->orderBy('time', 'ASC')->first();
    }
    
    public function lastShow() {
       // PERF: Using a dedicated query to select a single show instead of using the result of the shows() method.
       return Show::where('event_id', '=', $this->id)->orderBy('date', 'DESC')->orderBy('time', 'DESC')->first();
    }
    
}
