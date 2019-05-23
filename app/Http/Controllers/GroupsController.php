<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Group;
use App\User;

class GroupsController extends Controller {

    public function __construct() {
	$this->middleware('auth');
    }

    public function show(Group $group, Request $request) {
	$users=$group->students;
	$owners=$group->owner;
//	$user = $request->user();
//	$teachers_group = $user->teach_groups;
//	$students_group = $user->student_groups;


	return view('groups.index', [
	    'users' => $users,
	    'owners'=> $owners,
	]);
    }

}
