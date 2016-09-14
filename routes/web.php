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

Route::get('/', function () {
    return view('welcome', ['foo' => 'bar']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'task'], function () {
        Route::get('/', 'TaskController@index');
        Route::get('create', 'TaskController@create');
        Route::post('/', 'TaskController@store');
        Route::get('{id}', 'TaskController@show');
        Route::get('{id}/edit', 'TaskController@edit');
        Route::put('/', 'TaskController@update');
        Route::delete('/', 'TaskController@destroy');
    });

    Route::group(['prefix' => 'task-list'], function () {
        Route::get('/', 'TaskListController@index');
        Route::get('create', 'TaskListController@create');
        Route::post('/', 'TaskListController@store');
        Route::get('{id}', 'TaskListController@show');
        Route::get('{id}', 'TaskListController@edit');
        Route::put('/', 'TaskListController@update');
        Route::delete('/', 'TaskListController@destroy');
    });
});


Auth::routes();

