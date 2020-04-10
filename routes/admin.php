<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function() {
	Route::namespace('Auth')->middleware('guest:admin')->group(function() {
		Route::get('login', 'LoginController@showLoginForm')->name('login');
		Route::post('login', 'LoginController@login')->name('login');
	});

	Route::middleware('auth:admin')->group(function() {
		Route::namespace('Auth')->group(function() {
			Route::post('logout', 'LoginController@logout')->name('logout');
		});

		Route::get('/', 'DashboardController@index')->name('dashboard');
		Route::get('/account_settings', 'DashboardController@accountSettings')->name('account_settings');
		Route::post('/account_settings', 'DashboardController@updateAccountSettings')->name('update_account_settings');
		
		Route::get('/admins', 'AdminController@index')->name('admins.index');
		Route::get('/permissions', 'PermissionController@index')->name('permissions.index');
		Route::get('/activity_logs', 'ActivityLogController@index')->name('activity_logs');

		/** Categories */
		Route::get('/categories', 'CategoryController@index')->name('categories.index');
		Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
		Route::get('/categories/{id}/destroy', 'CategoryController@destroy')->name('categories.destroy');

		Route::post('/categories/{id}', 'CategoryController@update')->name('categories.update');

		/** Drawings */
		Route::get('/drawings', 'DrawingController@index')->name('drawings.index');
		Route::get('/drawings/create', 'DrawingController@create')->name('drawings.create');
		Route::get('/drawings/{id}', 'DrawingController@show')->name('drawings.show');
		Route::get('/drawings/{id}/edit', 'DrawingController@edit')->name('drawings.edit');
		Route::get('/drawings/{id}/destroy', 'DrawingController@destroy')->name('drawings.destroy');

		Route::post('/drawings', 'DrawingController@store')->name('drawings.store');
		Route::post('/drawings/{id}', 'DrawingController@update')->name('drawings.update');

		/** Samples */
		Route::get('/samples', 'SampleController@index')->name('samples.index');
		Route::get('/samples/create', 'SampleController@create')->name('samples.create');
		Route::get('/samples/{id}', 'SampleController@show')->name('samples.show');
		Route::get('/samples/{id}/edit', 'SampleController@edit')->name('samples.edit');
		Route::get('/samples/{id}/destroy', 'SampleController@destroy')->name('samples.destroy');

		Route::post('/samples', 'SampleController@store')->name('samples.store');
		Route::post('/samples/{id}', 'SampleController@update')->name('samples.update');

		/** Roles */
		Route::get('/roles', 'RoleController@index')->name('roles.index');
		Route::get('/roles/create', 'RoleController@create')->name('roles.create');
		Route::get('roles/{id}/edit', 'RoleController@edit')->name('roles.edit');
		Route::get('/roles/{id}/destroy', 'RoleController@destroy')->name('roles.destroy');

		Route::post('/roles', 'RoleController@store')->name('roles.store');
		Route::post('/roles/{id}', 'RoleController@update')->name('roles.update');

		/** Messages */
		Route::get('/messages', 'MessageController@index')->name('messages.index');
		Route::get('/messages/{id}', 'MessageController@show')->name('messages.show');
		Route::get('/messages/{id}/destroy', 'MessageController@destroy')->name('messages.destroy');
	});
});
