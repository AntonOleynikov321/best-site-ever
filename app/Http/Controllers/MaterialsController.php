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
        $materials = $group->materials;
        return view('materials.show', [
            'materials' => $materials,
            'group' => $group,
        ]);
    }

    public function create(Group $group) {
        $materials = $group->materials;
        return view('materials.create', [
            'materials' => $materials,
            'group' => $group,
        ]);
    }

    public function store(Request $request, Group $group) {


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
        $user = $request->user();
        $materials = new Materials;
        $materials->name = $request->name;
        $materials->text = $request->text;
        $materials->group_id = $group->id;
        $materials->user_id = $user['id'];
        $materials->save();
        return redirect(route('materials_show',$group->id));
    }

    public function destroy(Materials $material) {
        $material->delete();
        return redirect('/materials/create');
    }

}
