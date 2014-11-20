<?php namespace EventCalendar;

use Route, Input, Redirect;

class ApiPriceGroupController extends BaseController {
    
    // TODO: Find a way to move the redirects out of this controller
    
    public function create() {
        $priceGroup = new PriceGroup();
        
        $priceGroup->name = Input::get('name');
        $priceGroup->price = Input::get('price');
        $priceGroup->save();
        
        return Redirect::to('price-groups')->with(array('title' => 'Price Group created',
          'success' => "The price group \"$priceGroup->name\" has been created successfully."));
    }
    
    public function update() {
        $priceGroup = PriceGroup::find(Route::input('id'));
        
        $priceGroup->name = Input::get('name');
        $priceGroup->price = Input::get('price');
        $priceGroup->save();
        
        return Redirect::to('price-groups')->with(array('title' => 'Price Group updated',
          'success' => "The price group \"$priceGroup->name\" has been updated successfully."));
    }
    
    public function delete() {
        $priceGroup = PriceGroup::find(Route::input('id'));
        
        $priceGroup->delete();
        
        return Redirect::to('price-groups')->with(array('title' => 'Price Group deleted',
          'success' => "The price group \"$priceGroup->name\" has been deleted successfully."));
    }
    
}
