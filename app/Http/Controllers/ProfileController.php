<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    
    public function index() {
        $user = Auth::user();
        return view('profile', compact('user'));

    }

    public function update(Request $request) {
        $user = Auth::user();
    $this->validate($request, [
        'name' => 'required|max:255|unique:users,name,'.$user->id,
        'email' => 'required|email|max:255|unique:users,email,'.$user->id,
        'password' => 'required|password|max:255|unique:users,password,'.$user->id,
    ]);
    $input = $request->only('name','email');
    $user->update($input);

    return back();
    }
}