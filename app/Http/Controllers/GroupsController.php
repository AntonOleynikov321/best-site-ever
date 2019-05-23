<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Group;


class GroupsController extends Controller
{
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
    public function index(Request $request, Group $groups) {
        $groups = Group::all();
        return view('groups.index', [
            'groups' => $groups,
        ]);
    }

    public function create(Group $groups) {
        return view('groups.create', [
            'groups' => $groups,
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);
        $group = new Group();
        $group->name = $request->name;
        $group->owner_id = $request->user()->id;
//        var_dump($group);
//        die();
        $group->save();
        return redirect(route('groups_index'));
    }

    public function destroy( Group $group) {
        $group->delete();
        return redirect(route('groups_index'));
    }
}
