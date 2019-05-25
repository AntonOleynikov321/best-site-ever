<?php

namespace App\Http\Controllers;


use App\Homework;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\HomeController;

class GroupController extends Controller {

    public function __construct() {
        $this->middleware('auth');
public function show(Request $request) {
	$user=$request->user();
	$student_group=$user->student_groups;
	return view('cabinet.index', ['student_group' => $student_group]);
    }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    

}
