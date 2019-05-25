<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Group;
use App\Hw;

class GroupsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function create() {
        return view('group.create');
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

    
    public function show(Group $group) {
        return view('group.index', [
            'group'=>$group,
        ]);
    }
}
