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

Route::get('/', 'HomeController@index')->name('home_index');

//Route::resource('groups','GroupsController')->name();//TODO что делать с ресурсом хз


Route::get('/groups/{group}','GroupsController@show')->name('group_show');



Route::get('/groups/create','GroupsController@create')->name('group_create');

Route::post('/groups','GroupsController@store')->name('group_store');

Route::delete('/groups/{group}','GroupsController@destroy')->name('group_destroy');

Route::post('/invites','InvitesController@student')->name('invite_student');

Route::get('/groups/{group}/forums/create','ForumsController@create')->name('forum_create');

Route::post('/{group}/forums','ForumsController@store')->name('forum_store');


Route::delete('/forums/{forum}','ForumsController@destroy')->name('forum_destroy');


Route::get('/{group}/hws/create','HwsController@create')->name('hws_create');

Route::post('/{group}/hws','HwsController@store')->name('hws_store');

Route::delete('/hws/{hw}','HwsController@destroy')->name('hws_destroy');

Route::get('/{group}/materials/create','MaterialsController@create')->name('materials_create');

Route::post('/{group}/materials','MaterialsController@store')->name('materials_store');

Route::delete('/{material}','MaterialsController@destroy')->name('materials_destroy');

Route::post('/{hw}','HwsController@upload')->name('hws_upload');

Route::post('/invites/confirm','InvitesController@confirm')->name('invite_confirm');

Route::get('/hws/{hw}','HwsController@show')->name('hws_show');

Route::get('/forums/{forum}','ForumsController@show')->name('forum_show');

Route::get('/{group}/materials','MaterialsController@show')->name('materials_show');
