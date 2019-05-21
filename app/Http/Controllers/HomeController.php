<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function index(Request $request, Group $groups) {

//        $user = $request->user();
//        $teach_groups = $user->teach_groups();
//        foreach ($teach_groups as $group) {
//            echo $group->name;
//        }
//       $
        $groups = Group::All();
        return view('groups.index', [
            'groups' => $groups,
        ]);
    }

    public function addGroup(Group $groups) {
        return view('groups.create', [
            'groups' => $groups,
        ]);
    }

    public function createGroup(Request $request, Group $groups) {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);
        $groups = new Group();
        $groups->name = $request->name;
        $groups->save();
        return redirect(route('home_index'));
    }

//    public function destroy(Request $request, Group $groups) {
//        $this->authorise('destroy', $group);
//        $groups->delete();
//        return redirect(route('home_index'));
//    }

}
