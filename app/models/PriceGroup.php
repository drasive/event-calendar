<?php namespace EventCalendar;

use Validator;

class PriceGroup extends BaseModel {

    // Setup
    protected $fillable = array('name', 'price');
    
    // Relations
    public function events() {
        return $this->belongsToMany('EventCalendar\Event');
    }
    
    // Methods
    public function getValidator() {
        return Validator::make(
            array(
                'name' => $this->name,
                'price' => $this->price
            ),
            array(
                'name' =>        'required|between:2,35',
                'price' => array('required', 'regex:/[\d]{6}.[\d]{2}/')
            )
        );
    }
    
}
