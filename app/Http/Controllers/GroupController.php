<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class GroupController extends Controller {

    public function show() {
	$users = User::all();
	return view('cabinet.index', ['users' => $users]);
    }

}
