<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Group;
use App\User;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {

        $user = $request->user();
        $teachers=$user->teach_groups;
        $students=$user->student_groups;
        

        return view('groups.index', [
            'teachers' => $teachers,
            'students' => $students,
        ]);
    }

}
