<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GroupsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {
        $homeworks = \App\Homework::all();
        return view('group.index', [
            'homeworks' => $homeworks,
        ]);
    }
}
