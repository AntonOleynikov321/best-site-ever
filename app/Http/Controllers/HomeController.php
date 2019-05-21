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
    public function index(Request $request) {
        //поиск учителя по группе
//        $group=Group::find(3);
//        $owner=$group->owner;
//        var_dump($owner);
//        exit();
        
        $user = $request->user();
        $teachers=$user->teach_groups;
        $students=$user->student_groups;
        
//        $group=Group::find(1);
//        $owner=$group->students;
//        foreach ($owner as $group) {
//            echo $group->name.'<br/>';
//        }
//        exit();
//        $user = $request->user();
//        $groups=$user->student_groups;
//        foreach ($groups as $group) {
//            echo $group->name.'<br/>';
//        }
//        exit();
//        $groups = Group::all()->where('owner_id', $user->id);
//        $groups_student = Group::has();
        return view('groups.index', [
            'teachers' => $teachers,
            'students' => $students,
        ]);
    }

}
