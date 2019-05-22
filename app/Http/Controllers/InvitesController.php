<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class InvitesController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function student() {
        //$users = User::all();
        return view('add_student.add');
    }

}
