<?php namespace EventCalendar;

use LaravelBook\Ardent\Ardent;
use Validator;

class PriceGroup extends Ardent {

    // Relations
    public function events() {
        return $this->belongsToMany('EventCalendar\Event');
    }
    
    // Methods
    public function getValidator() {
        return Validator::make(
            array(
                'name' =>        $this->name,
                'price' =>       $this->price
            ),
            array(
                'name' =>        'required|between:2,35',
                'price' => array('required', 'regex:/[\d]{1,6}(,[\d]{1,2})?/')
            )
        );
    }
    
}
