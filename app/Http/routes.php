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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::auth();

Route::get('/', 'HomeController@index')->name('home_index');

Route::get('/groups/create','HomeController@addGroup')->name('groups_add');

Route::put('/','HomeController@createGroup')->name('groups_create');