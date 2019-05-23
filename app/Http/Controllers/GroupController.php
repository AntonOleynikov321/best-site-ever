<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GroupController extends Controller
{
    public function show(Request $request) {
        $users = $request->user()->group()->get();

        return view('posts.index', [
            'posts' => $tasks,
        ]);
    }
}
