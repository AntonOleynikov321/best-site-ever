<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Group;
use App\Homework;
class HwsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function create(Group $group) {
        
        return view('group.CreateHomework',[
            'group'=> $group,
        ]);
    }

    public function store(Request $request) {

        if ($request->hasFile('file_homework')) {
            $filename=$request->file('file_homework')->getClientOriginalName();
            $filename=$request->name.$filename;
            $file = $request->file('file_homework');
            $file->move('storage/app/public/homework',$filename);
        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'finish' => 'required',
        ]);
        $homework = new Homework();
        $homework->name = $request->name;
        $homework->text = $request->text;
        $homework->file=$filename;
        $homework->finish = $request->finish;
        $homework->save();
        return redirect(route('group_show'));
    }

    public function delete(Homework $homework, Request $request) {
        $homework->id = $request->id;
        $homework->delete();
        return redirect(route('group.show'));
    }

    public function edit(Homework $homework) {
        return view('group.editHomework', [
            'homework' => $homework,
        ]);
    }

    public function update(Homework $homework, Request $request) {
        $homework->name = $request->name;
        $homework->text = $request->text;
        $homework->finish = $request->finish;
        $homework->save();
        return redirect(route('group.show'));
    }

    public function show(Homework $homework) {
        return view('group.showHomework', [
            'homework' => $homework,
        ]);
    }

}
