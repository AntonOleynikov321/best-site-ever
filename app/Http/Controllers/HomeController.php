<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Group;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
       
}
