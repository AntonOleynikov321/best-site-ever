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

    public function create(Materials $materials, Group $group) {
        $materials = $group->materials;
        return view('materials.create', [
            'materials' => $materials,
            'group' => $group,
        ]);
    }

    public function store(Request $request, Group $group) {
        if ($request->isMethod('post')) {
            if ($request->hasFile('file_name')) {
                $filename = $request->file('file_name')->getClientOriginalName();
                $filename = $request->name . $filename;
                $file = $request->file('file_name');
                $file->move('storage/app/public/materials', $filename);
            }
        }
        $this->validate($request, [
            'name' => 'required|max:255',
            'text' => 'required',
        ]);
        $user = $request->user();
        $materials = new Materials();
        $materials->name = $request->name;
        $materials->text = $request->text;
        $materials->file_name = $filename;
        $materials->group_id = $group->id;
        $materials->user_id = $user['id'];
        $materials->save();
        $materials = $group->materials;
        return view('materials.show', [
            'materials' => $materials,
            'group' => $group,
        ]);
    }

    public function destroy(Materials $material) {
        $group=$material->group;
        $material->delete();        
        return redirect(route('materials_show',$group->id));
    }

}
