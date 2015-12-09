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
            ->with('task_categories',App\TaskCategory::all())
            ->with('tasks',App\Task::all());
	}
});

// model routes..

Route::post('tc/store', 'TaskCategoryController@store');
Route::post('tc/edit/{id}', array('uses' => 'TaskCategoryController@edit', 'as' => 'route.edit'));
Route::patch('tc/{id}', array('uses' => 'TaskCategoryController@update', 'as' => 'route.update'));
Route::delete('tc/{id}', array('uses' => 'TaskCategoryController@destroy', 'as' => 'route.destroy'));

Route::post('task/store', 'TaskController@store');
Route::post('task/edit/{id}', array('uses' => 'TaskController@edit', 'as' => 'task.edit'));
Route::patch('task/{id}', array('uses' => 'TaskController@update', 'as' => 'task.update'));
Route::delete('task/{id}', array('uses' => 'TaskController@destroy', 'as' => 'task.destroy'));

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');





    