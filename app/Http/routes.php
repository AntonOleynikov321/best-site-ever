<?php
use Illuminate\Http\Request;
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

Route::get('/users', function () {
    $users = User::all();
    return view('cabinet.index',['users'=>$users]);
})->name('users_index');

Route::delete('/users/{user}',function(User $users) {
        $users->delete();
        return redirect(route('users_index'));
    })->name('users_destroy');
    
Route::auth();

Route::get('/', 'HomeController@index');
