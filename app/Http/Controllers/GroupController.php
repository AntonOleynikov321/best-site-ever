<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\HomeController;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $homeworks = \App\Homework::all();
        return view('group.index', [
            'homeworks' => $homeworks,
        ]);
    }
    public function create() {
        
        return view('group.CreateHomework');
    }
}
