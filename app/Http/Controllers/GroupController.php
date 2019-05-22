<?php

namespace App\Http\Controllers;


use App\Homework;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\HomeController;

class GroupController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $homeworks = \App\Homework::all();
        return view('group.index', [
            'homeworks' => $homeworks,
        ]);
    }

    public function createHomework() {
        return view('group.CreateHomework');
    }

    public function storeHomework(Request $request) {
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'finish' => 'required',
        ]);
        $homework = new Homework();
        $homework->name = $request->name;
        $homework->text = $request->text;
        $homework->finish = $request->finish;
        $homework->save();
        return redirect(route('group.index'));
    }
    
    public function deleteHomework(Homework $homework, Request $request) {
        $homework->id=$request->id;
        $homework->delete();
        return redirect(route('group.index'));
    }
    public function editHomework(Homework $homework) {
        return view('group.editHomework', [
            'homework' => $homework,
        ]);
    }
    
    public function updateHomework(Homework $homework, Request $request) {
        $homework->name = $request->name;
        $homework->text=$request->text;
        $homework->finish=$request->finish;
        $homework->save();
        return redirect(route('group.index'));
    }
    
    public function showHomework(Homework $homework) {
         return view('group.showHomework', [
            'homework' => $homework,
        ]);
    }

}
