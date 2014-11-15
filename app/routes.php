<?php

Route::get('/', function()
{
	return View::make('programme');
});

Route::get('/programme', function()
{
	return Redirect::to('/');
});


Route::get('/manage/events', function()
{
	return View::make('manage.events');
});

Route::get('/manage/price-groups', function()
{
	return View::make('manage.price-groups');
});

Route::get('/manage/genres', function()
{
	return View::make('manage.genres');
});


Route::get('/about', function()
{
	return View::make('about');
});
