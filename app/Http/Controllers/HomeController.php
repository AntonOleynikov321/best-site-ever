<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use App\Group;
=======
use App\Group;
use App\User;

class HomeController extends Controller {
>>>>>>> 6d9d1bb7061286755b18ea1c3fd67dbd56ce6b6b

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

<<<<<<< HEAD
    public function index(){
        $groups = Group::all();
        return view('groups.index',[
            'groups'=>$groups,
        ]);
    }
    
    public function addgroup(Group $group){    
        return redirect(route('groups_create'));
    }   
    
    public function destroy(Request $request, Group $groups){
        $this->authorise('destroy',$group);
        $groups->delete();
        return redirect(route('home.index'));
    }
       
=======
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Group $groups) {

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

>>>>>>> 6d9d1bb7061286755b18ea1c3fd67dbd56ce6b6b
}
