<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Group;

class InvitesController extends Controller {

    public function __construct() {
	$this->middleware('auth');
    }

    public function student() {
	return view('add_student.add');
    }

    public function inviteUser(Group $group, Request $request) {
	$login = $request->login;
	$user = User::all()->where('name', $login)[0];
	var_dump($user);
	$group->students()->save($user);
    }

}
