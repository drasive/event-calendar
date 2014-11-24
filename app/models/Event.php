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
    
    // Methods
    public function firstShow() {
       // PERF: Using a dedicated query to select a single show instead of using the result of the shows() method.
       return Show::where('event_id', '=', $this->id)->orderBy('date', 'ASC')->orderBy('time', 'ASC')->first();
    }
    
    public function lastShow() {
       // PERF: Using a dedicated query to select a single show instead of using the result of the shows() method.
       return Show::where('event_id', '=', $this->id)->orderBy('date', 'DESC')->orderBy('time', 'DESC')->first();
    }
    
}
