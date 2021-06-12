<?php

namespace App\Http\Controllers;

use App\Models\SpecificObjective;
use Illuminate\Http\Request;

class SpecificObjectiveController extends Controller
{
    public function index()
    {
        $specific_objectives = SpecificObjective::all();
        return view('pages.admin.specific_objective.index', compact('specific_objectives'));
    }

    public function create()
    {
        return view('pages.admin.specific_objective.create');
    }

    public function store(Request $request)
    {
        $specific_objectives = SpecificObjective::create($request->all());
        return back();
    }

    public function edit($id)
    {
        $specific_objectives = SpecificObjective::find($id);
        return view('pages.admin.specific_objective.edit', compact('specific_objectives'));
    }

    public function update(Request $request, $id)
    {
        $specific_objectives = SpecificObjective::find($id)->update($request->all());
        return back();
    }


}