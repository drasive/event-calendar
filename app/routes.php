<?php

Route::pattern('id', '[0-9]+');


Route::get('/', 'EventCalendar\ProgrammeController@index');
Route::get('/programme', function() { return Redirect::to('/'); });

Route::get('/login', 'EventCalendar\LoginController@index');
Route::post('api/login/authenticate', 'EventCalendar\LoginController@authenticate');


Route::get('/manage/events', array('before' => 'auth', function() {
    return View::make('manage.events');
}));

Route::get('/manage/price-groups', array('before' => 'auth', function() {
    return View::make('manage.price-groups');
}));

Route::group(array('before' => 'auth'), function() {
    Route::get('/genres',             'EventCalendar\GenreController@index');
    Route::get('/genres/create',      'EventCalendar\GenreController@create');    
    Route::get('/genres/edit/{id}',   'EventCalendar\GenreController@edit');
    Route::get('/genres/delete/{id}', 'EventCalendar\GenreController@delete');
    
    Route::put(   'api/genres',      'EventCalendar\ApiGenreController@create');
    Route::post(  'api/genres/{id}', 'EventCalendar\ApiGenreController@update');
    Route::delete('api/genres/{id}', 'EventCalendar\ApiGenreController@delete');
});

Route::get('/about', function() {
    return View::make('about');
});
