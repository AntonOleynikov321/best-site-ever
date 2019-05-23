<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Materials;
use App\Group;

class MaterialsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function show(Request $request) {
        $materials = new Materials;
        $materials = Materials::all();
        return view('materials/create', [
            'materials' => $materials,
        ]);
    }

    //public function create(Request $request,Group $group) {
    public function create() {
        //$group = $request->group();
        //return view('/{group}/materials/create');
        return view('/materials/create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'text' => 'required',
        ]);

//        $request->group()->materials()->create([
//            'name' => $request->name,
//            'text' => $request->text,
//        ]);        

        $materials = new Materials;
        $materials->name = $request->name;
        $materials->text = $request->text;
        $materials->save();
        return redirect('/materials/create');
    }

    public function destroy(Materials $material) {
        $material->delete();
        return redirect('/materials/create');
    }

    public function fileUpload(Request $request) {

            if ($request->hasFile('file')) {
                $filename = $request->file('file')->getClientOriginalName();
                $filename = $request->name.$filename;
                $file = $request->file('file');
                $file->move('storage/app/public', 'filename');
            }
            exit();
    }
        

}
