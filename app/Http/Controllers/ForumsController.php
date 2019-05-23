<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\HomeController;

class ForumsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('forum.index');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:50',
            'description' => 'required|max:50',
        ]);
        
        $forum = new Forum();
        $forum->name = $request->name;
        $forum->description = $request->descripntion;
        $forum->save();
        return redirect(route('groups.index'));
    }
    
    public function destroy(Forum $forum, Request $request) {
        $forum->id=$request->id;
        $forum->delete();
        return redirect(route('groups.index'));
    }

     public function show(Forum $forum) {
         return view('', [
            'forum' => $forum,
        ]);
    }
}
