<?php namespace EventCalendar;

class Genre extends BaseModel {
    
    // Setup
    protected $fillable = array('name');
    
    // Relations
    public function events() {
        return $this->hasMany('EventCalendar\Event');
    }
    
    // Validation
    // TODO: Implement
    public static $rules = array(
        'name' => 'required|between:2,50'
    );
    
}
