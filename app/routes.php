<?php

Route::pattern('id', '[0-9]+');


Route::get('/', 'EventCalendar\ProgrammeController@index');
Route::get('/programme', function() { return Redirect::to('/'); });

Route::get('/archive', 'EventCalendar\ArchiveController@index');

Route::get('/login', 'EventCalendar\LoginController@index');
Route::post('login/authenticate', 'EventCalendar\LoginController@authenticate');

Route::group(array('before' => 'auth'), function() {
    Route::get('/events',             'EventCalendar\EventController@index');
    Route::get('/events/create',      'EventCalendar\EventController@create');    
    Route::get('/events/edit/{id}',   'EventCalendar\EventController@edit');
    Route::get('/events/delete/{id}', 'EventCalendar\EventController@delete');
    
    Route::put(   'api/events',      'EventCalendar\ApiEventController@create');
    Route::post(  'api/events/{id}', 'EventCalendar\ApiEventController@update');
    Route::delete('api/events/{id}', 'EventCalendar\ApiEventController@delete');
});

Route::group(array('before' => 'auth'), function() {
    Route::get('/price-groups',             'EventCalendar\PriceGroupController@index');
    Route::get('/price-groups/create',      'EventCalendar\PriceGroupController@create');    
    Route::get('/price-groups/edit/{id}',   'EventCalendar\PriceGroupController@edit');
    Route::get('/price-groups/delete/{id}', 'EventCalendar\PriceGroupController@delete');
    
    Route::put(   'api/price-groups',      'EventCalendar\ApiPriceGroupController@create');
    Route::post(  'api/price-groups/{id}', 'EventCalendar\ApiPriceGroupController@update');
    Route::delete('api/price-groups/{id}', 'EventCalendar\ApiPriceGroupController@delete');
});

Route::group(array('before' => 'auth'), function() {
    Route::get('/genres',             'EventCalendar\GenreController@index');
    Route::get('/genres/create',      'EventCalendar\GenreController@create');    
    Route::get('/genres/edit/{id}',   'EventCalendar\GenreController@edit');
    Route::get('/genres/delete/{id}', 'EventCalendar\GenreController@delete');
    
    Route::put(   'api/genres',      'EventCalendar\ApiGenreController@create');
    Route::post(  'api/genres/{id}', 'EventCalendar\ApiGenreController@update');
    Route::delete('api/genres/{id}', 'EventCalendar\ApiGenreController@delete');
});

Route::get('/about', 'EventCalendar\AboutController@index');
