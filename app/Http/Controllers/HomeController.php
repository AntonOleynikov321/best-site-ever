<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Group;
use App\User;
use App\Http\Controllers\GroupsController;
class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {

        $user = $request->user();
        $teachers_group=$user->teach_groups;
        $students_group=$user->student_groups;
        

        return view('cabinet.index', [
            'teachers_group' => $teachers_group,
            'students_group' => $students_group,
        ]);
    }

}
