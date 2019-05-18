<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/group', 'GroupController@index');

 Route::get('/group/createHomework','GroupController@create')->name('createHomework');