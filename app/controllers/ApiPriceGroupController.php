<?php namespace EventCalendar;

use Route, Input, Redirect;

class ApiPriceGroupController extends BaseController {
    
    public function create() {
        $priceGroup = new PriceGroup();        
        $priceGroup->name = Input::get('name');
        $priceGroup->price = Input::get('price');
        
        // Validate input
        if ($priceGroup->getValidator()->fails()) {
            return Redirect::to('price-groups')->withErrors($priceGroup->getValidator());
        }
        
        // Save model
        $priceGroup->save();
        
        // Redirect
        return Redirect::to('price-groups')->with(array('title' => 'Price Group created',
          'success' => "The price group \"$priceGroup->name\" has been created successfully."));
    }
    
    public function update() {
        $priceGroup = PriceGroup::find(Route::input('id'));        
        $priceGroup->name = Input::get('name');
        $priceGroup->price = Input::get('price');
        
        // Validate input
        if ($priceGroup->getValidator()->fails()) {
            return Redirect::to('price-groups')->withErrors($priceGroup->getValidator());
        }
        
        // Save model
        $priceGroup->save();
        
        // Redirect
        return Redirect::to('price-groups')->with(array('title' => 'Price Group updated',
          'success' => "The price group \"$priceGroup->name\" has been updated successfully."));
    }
    
    public function delete() {
        $priceGroup = PriceGroup::find(Route::input('id'));
        
        // Delete model
        $priceGroup->delete();
        
        // Redirect
        return Redirect::to('price-groups')->with(array('title' => 'Price Group deleted',
          'success' => "The price group \"$priceGroup->name\" has been deleted successfully."));
    }
    
}
