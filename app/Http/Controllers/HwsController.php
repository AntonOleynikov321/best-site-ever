<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

use App\Http\Requests;

class HwsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(Request $request) {
        $homeworks = \App\Homework::all();
        return view('group.index', [
            'homeworks' => $homeworks,
        ]);
    }

    public function create() {
        return view('group.CreateHomework');
    }

    public function store(Request $request) {
        
=======
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Group;
use App\Hw;
class HwsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function create(Group $group) {
        
        return view('group.CreateHomework',[
            'group'=> $group,
        ]);
    }

    public function store(Request $request,Group $group) {

        if ($request->hasFile('file_homework')) {
            $filename=$request->file('file_homework')->getClientOriginalName();
            $filename=$request->name.$filename;
            $file = $request->file('file_homework');
            $file->move('storage/app/public/homework',$filename);
        }

>>>>>>> 6c76b70cb6497769b3c43cba2787e1499b6f323d
        $this->validate($request, [
            'name' => 'required|max:255',
            'finish' => 'required',
        ]);
<<<<<<< HEAD
        $homework = new Homework();
        $homework->name = $request->name;
        $homework->text = $request->text;
        $homework->finish = $request->finish;
        $homework->save();
        return redirect(route('group.index'));
    }
    
    public function delete(Homework $homework, Request $request) {
        $homework->id=$request->id;
        $homework->delete();
        return redirect(route('group.index'));
    }
=======
        $homework = new Hw();
        $homework->name = $request->name;
        $homework->text = $request->text;
        $homework->finish = $request->finish;
        $homework->group_id=$group->id;
        $homework->user_id=$request->user;
        $homework->save();
        return redirect(route('group_show'));
    }

    public function delete(Homework $homework, Request $request) {
        $homework->id = $request->id;
        $homework->delete();
        return redirect(route('group.show'));
    }

>>>>>>> 6c76b70cb6497769b3c43cba2787e1499b6f323d
    public function edit(Homework $homework) {
        return view('group.editHomework', [
            'homework' => $homework,
        ]);
    }
<<<<<<< HEAD
    
    public function update(Homework $homework, Request $request) {
        $homework->name = $request->name;
        $homework->text=$request->text;
        $homework->finish=$request->finish;
        $homework->save();
        return redirect(route('group.index'));
    }
    
    public function show(Homework $homework) {
         return view('group.showHomework', [
            'homework' => $homework,
        ]);
    }
=======

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

>>>>>>> 6c76b70cb6497769b3c43cba2787e1499b6f323d
}
