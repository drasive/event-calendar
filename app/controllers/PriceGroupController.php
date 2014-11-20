<?php namespace EventCalendar;

use Route, View;

class PriceGroupController extends BaseController {
    
    public function index() {
        $priceGroups = PriceGroup::orderBy('name')->get();
        
        return View::make('price-groups')->with('priceGroups', $priceGroups);
    }
    
    public function create() {
        return View::make('price-groups.create');
    }
    
    public function edit() {
        $priceGroup = PriceGroup::find(Route::input('id'));
        
        return View::make('price-groups.edit')->with('priceGroup', $priceGroup);
    }
    
    public function delete() {
        $priceGroup = PriceGroup::find(Route::input('id'));
        
        return View::make('price-groups.delete')->with('priceGroup', $priceGroup);
    }
    
}
