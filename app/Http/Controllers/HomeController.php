<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Group;
use App\User;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $groups = Group::All();
        return view('groups.index', [
            'groups' => $groups,
        ]);
    }

    public function create() {
        return view('groups.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
                    'name' => 'required|max:255',
        ]);
        $request->user()->groups()->create([
            'name' => $request->name,
        ]);
        return redirect('/');
    }

    public function show(Group $group) {
        return view('groups.show', [
            'group' => $group,
        ]);
    }
}