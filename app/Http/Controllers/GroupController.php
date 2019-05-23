<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Group;

class GroupController extends Controller {
    
    public function show(Request $request) {
	$user=$request->user();
	$student_group=$user->student_groups;
	return view('cabinet.index', ['student_group' => $student_group]);
    }
    

}
