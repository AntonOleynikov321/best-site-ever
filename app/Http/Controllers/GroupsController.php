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

    public function show(Request $request) {

	$user = $request->user();
	$students_group = $user->student_groups;


	return view('groups.index', [
	    'students_group' => $students_group,
	]);
    }

}
