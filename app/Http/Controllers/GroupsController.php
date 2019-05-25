<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Group;
use App\User;
use App\Hw;

class GroupsController extends Controller {

    public function __construct() {
	$this->middleware('auth');
    }

    public function show(Group $group, Request $request) {
	$users = $group->students;
	$owners = $group->owner;
	$homeworks = $request->user()->hws()->get();
//	$user = $request->user();
//	$teachers_group = $user->teach_groups;
//	$students_group = $user->student_groups;


	return view('group.index', [
	    'users' => $users,
	    'owners' => $owners,
	    'group' => $group,
	    'homeworks' => $homeworks,
	]);
    }
    public function delete(Group $group, Request $request){
	$users = $group->students;
	$users->delete();
	return view('group.index', [
	    'users' => $users,
	    'owners' => $owners,
	    'group' => $group,
	    'homeworks' => $homeworks,
	]);
    }
}
