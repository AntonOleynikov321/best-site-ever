<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Group;

class GroupsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function show(Group $group) {
        return view('groups.index',['group'=>$group]);
    }

}
