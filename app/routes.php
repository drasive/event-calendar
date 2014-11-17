<?php

Route::get('/', 'EventCalendar\ProgrammeController@index');
Route::get('/programme', function() { return Redirect::to('/'); });

Route::get('/login', 'EventCalendar\LoginController@index');
Route::post('/login/authenticate', 'EventCalendar\LoginController@authenticate');


Route::get('/manage/events', array('before' => 'auth', function() {
	return View::make('manage.events');
}));

Route::get('/manage/price-groups', array('before' => 'auth', function() {
	return View::make('manage.price-groups');
}));

Route::get('/manage/genres', array('before' => 'auth', function() {
	return View::make('manage.genres');
}));


Route::get('/about', function() {
	return View::make('about');
});
