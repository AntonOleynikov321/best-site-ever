<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/group','GroupController@index')->name('group.index');

 Route::get('/group/createHomework','GroupController@createHomework')->name('create.homework');
 
 Route::post('/group','GroupController@storeHomework')->name('store.homework');
 
 Route::delete('/group/{homework}','GroupController@deleteHomework')->name('destroy.homework');