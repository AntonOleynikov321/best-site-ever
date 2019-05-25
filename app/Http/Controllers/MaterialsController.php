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

    public function show(Group $group) {
        $materials=$group->materials;
        return view('group.materials.show', [
            'materials' => $materials,
        ]);
    }

    public function create(Group $group) {
        return view(route('materials_create',$group->id));
    }

    public function store(Request $request) {


        if ($request->isMethod('post')) {

            if ($request->hasFile('file')) {
                $filename = $request->file('file')->getClientOriginalName();
                $filename = $request->name . $filename;
                $file = $request->file('file');
                $file->move(public_path('storage/app/public/materials'), $filename);
            }
        }

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

}
