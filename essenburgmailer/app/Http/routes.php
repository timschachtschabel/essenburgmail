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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {

    Route::resource('customers', 'customersController');

    Route::put('customers/suspend/{customer}', 'customersController@suspend');

});

Route::group(['middleware' => 'auth'], function() {

    Route::resource('contents', 'contentsController');

});

Route::auth();

Route::get('/home', 'HomeController@index');
