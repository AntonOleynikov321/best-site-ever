<?php

namespace App\Http\Controllers;

use App\Group;
use App\Homework;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\HomeController;

class GroupsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group) {
	var_dump($group);
        $homeworks = \App\Homework::all();
        return view('group.index', [
            'homeworks' => $homeworks,
        ]);
    }

    
}
