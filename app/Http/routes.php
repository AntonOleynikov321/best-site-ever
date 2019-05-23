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

Route::auth();

Route::get('/', 'HomeController@index');

Route::resource('groups','GroupsController');

Route::get('/groups/1','GroupsController@show')->name('group.show');

Route::get('/groups/create','GroupsController@create');

Route::post('/groups','GroupsController@store');

Route::delete('/groups/{group}','GroupsController@destroy');

Route::post('/invites','InvitesController@student');

Route::get('/{group}/forums/create','ForumsController@create');

Route::post('/{group}/forums','ForumsController@store');

Route::delete('/forums/forum','ForumsController@destroy');

Route::get('/1/hws/create','HwsController@create')->name ('homework.create');

Route::post('/1/hws','HwsController@store')->name('homework.store');

Route::delete('/hws/{hw}','HwsController@destroy')->name('homework.destroy');

Route::get('/{group}/materials/create','MaterialsController@create');

Route::post('/{group}/materials','MaterialsController@store');

Route::delete('/{material}','MaterialsController@destroy');

Route::post('/{hw}','HwsController@upload')->name('homework.upload');

Route::post('/invites/confirm','InvitesController@confirm');

Route::get('/hws/{hw}','HwsController@show');

Route::get('/forums/{forum}','ForumsController@show');

Route::get('/{group}/materials','MaterialsController@show');
