<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Group;
use App\Hw;
class GroupsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function show(Request $request, Group $group) {
      
        $homeworks= $request->user()->hws()->get();
        return view('group.index', [
            'group'=>$group,
            'homeworks' => $homeworks,
        ]);
    }
}
