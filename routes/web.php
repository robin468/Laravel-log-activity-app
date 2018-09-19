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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view', ['as' => 'view', 'uses' => 'DummyController@activity']);

Route::get('/log', ['as' => 'view', 'uses' => 'DummyController@log']);

Route::get('/performed', ['as' => 'view' , 'uses' => 'DummyController@performedOn']);

Route::get('/property', ['as' => 'view', 'uses' => 'DummyController@properties']);

Route::get('/causedby', ['as' => 'view', 'uses' => 'DummyController@causedby']);

