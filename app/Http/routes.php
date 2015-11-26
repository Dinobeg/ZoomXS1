<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('dashboard', 'PagesController@dashboard');
Route::get('login', 'PagesController@login');
Route::get('home', function(){
	if(Auth::guest()){
		return Redirect::to('login');
	} else {
		return view('pages.dashboard');
	}
});
Route::get('employee', function() {
	$employee = App\Employee::find(1);
	print_r($employee);
});
Route::get('task_priority', function() {
	$x = App\TaskPriority::find(1);
	echo 'Hello this is task priority ' . $x->name;
});
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');





    