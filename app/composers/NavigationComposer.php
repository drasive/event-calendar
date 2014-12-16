<?php namespace EventCalendar;

use Auth;

class NavigationComposer {
    
    public function compose($view) {
        $view->with('user', Auth::user());
    }
    
}
