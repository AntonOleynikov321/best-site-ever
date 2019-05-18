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
        $this->validate($request, [
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|password|max:255|unique:users',
        ]);
        $input = $request->only('name','email','password');
        $user = Auth::user();
        $user->update($input);

        return back();
    }
}