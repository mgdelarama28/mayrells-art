<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

Route::namespace('Web')->name('web.')->group(function() {
	Route::namespace('Auth')->group(function() {
		Route::middleware('guest:web')->group(function() {
			Route::get('login', 'LoginController@showLoginForm')->name('login');
			Route::post('login', 'LoginController@login')->name('login');
		});
	});

	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/portfolio/{categoryName}', 'HomeController@portfolio')->name('portfolio');
	
	Route::post('/messages', 'MessageController@store')->name('messages.store');
});
