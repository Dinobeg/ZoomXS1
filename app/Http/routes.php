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
		return view('pages.dashboard')
            ->with('users', App\User::all())
            ->with('task_categories',App\TaskCategory::all());
	}
});

// model routes..

Route::post('tc/store', 'TaskCategoryController@store');
Route::patch('tc/{id}', array('uses' => 'TaskCategoryController@update', 'as' => 'route.update'));
Route::delete('tc/{id}', array('uses' => 'TaskCategoryController@destroy', 'as' => 'route.destroy'));

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');





    