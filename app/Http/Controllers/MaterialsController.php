<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Materials;
use App\Group;
use Storage;

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


        if ($request->isMethod('post')) {

            if ($request->hasFile('file')) {
                $filename = $request->file('file')->getClientOriginalName();
                $filename = $request->name . $filename;
                $file = $request->file('file');
                $file->move(public_path('storage/app/public') . '/path', $filename);
            }
        }
//        if ($request->hasFile('file_materials')) {
        //$filename = $request->file('file_materials')->getClientOriginalName();
        //$filename = $request->name . $filename;
        //$file = $request->file('file_materials');
//            $file->move('storage/app/public/materials', $filename);
//        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'text' => 'required',
        ]);
        echo asset('storage/file_materials');
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

}
