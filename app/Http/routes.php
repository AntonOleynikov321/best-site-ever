<?php
use Illuminate\Http\Request;
use App\UserModel;
use App\User;
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
    $users = User::all();
    return view('welcome',['users'=>$users]);
});
Route::auth();

Route::get('/', 'HomeController@index');
