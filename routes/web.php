<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/test', function () {
    return view('test');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/coming-soon', function(){
	return view('coming-soon');
});

Route::get('/', 'FrontendController@home');

Route::get('/portfolio', 'FrontendController@portfolio');
Route::get('/team', 'FrontendController@team');
Route::get('/portfolio/{slug}', 'FrontendController@project');

Route::get('/faq', 'FrontendController@faq');
Route::get('/contact', 'FrontendController@contact');
