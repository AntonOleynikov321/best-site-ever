<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class HwsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('group.CreateHomework');
    }

    public function store(Request $request) {

        if ($request->hasFile('file_homework')) {
            $filename=$request->file('file_homework')->getClientOriginalName();
            $filename=$request->name.$filename;
            $file = $request->file('file_homework');
            $file->move('storage/app/public/homework',$filename);
        }

        exit();
        $this->validate($request, [
            'name' => 'required|max:255',
            'finish' => 'required',
        ]);
        $homework = new Homework();
        $homework->name = $request->name;
        $homework->text = $request->text;
        $homework->finish = $request->finish;
        $homework->save();
        return redirect(route('group.show'));
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
