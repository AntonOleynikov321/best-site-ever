<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Group;
use App\Hw;

class HwsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function create(Group $group) {

        return view('group.CreateHomework', [
            'group' => $group,
        ]);
    }

    public function store(Request $request, Group $group) {
        if ($request->hasFile('file_homework')) {
            $filename = $request->file('file_homework')->getClientOriginalName();
            $filename = $request->name . $filename;
            $file = $request->file('file_homework');
            $file->move('storage/app/public/homework', $filename);
        }
        $this->validate($request, [
            'name' => 'required|max:255',
            'finish' => 'required',
        ]);
        $user=$request->user();
        $homework = new Hw();
        $homework->name = $request->name;
        $homework->text = $request->text;
        $homework->finish = $request->finish;
        $homework->file_name = $filename;
        $homework->group_id = $group->id;
        $homework->user_id = $user['id'];
        $homework->save();
        return redirect(route('group_show',[
            'group' => $group,
        ]));
    }

    public function delete(Hw $homework, Request $request, Group $group) {
        $homework->id = $request->id;
        $homework->delete();
        return redirect(route('group_show',[
            'group' => $group,
        ]));
    }

    public function edit(Homework $homework) {
        return view('group.editHomework', [
            'homework' => $homework,
        ]);
    }

    public function update(Hw $homework, Request $request, Group $group) {
        $homework->name = $request->name;
        $homework->text = $request->text;
        $homework->finish = $request->finish;
        $homework->save();
        return redirect(route('group_show'),[
            'group' => $group,
        ]);
    }

    public function show(Hw $homework, Group $group) {
        return view('group.showHomework', [
            'homework' => $homework,
            'group'=>$group,
        ]);
    }

}
