<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Group;

class GroupsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
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
        $group->save();
        return redirect(route('home_index'));
    }

    public function destroy(Group $group) {
        $group->delete();
        return redirect(route('home_index'));
    }

    public function show() {
        return view('groups.index');
    }

}
