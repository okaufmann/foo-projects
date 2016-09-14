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

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', 'HomeController@index');

    Route::get('task/create', 'TaskController@create');
    Route::post('task/store', 'TaskController@store');
    Route::get('task/{task}', 'TaskController@show');
    Route::get('task/{task}', 'TaskController@edit');
    Route::put('task', 'TaskController@update');
    Route::delete('task/create', 'TaskController@destroy');


});





Auth::routes();

