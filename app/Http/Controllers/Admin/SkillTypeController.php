<?php

namespace App\Http\Controllers\Admin;

use App\Models\SkillType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("adminto.skill_type.index",["skill_types" => SkillType::all()]);
        // $skill_types = SkillType::all(); // Fetch all skill types
        // return view("adminto.skill_type.index", compact('skill_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminto.skill_type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $skillType = new SkillType();
        $skillType->name = $request->name;
        $skillType->save();
        return redirect()->route('skill_type.index')->with('success', 'Skill type created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillType $skillType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkillType $skillType)
    {
        return view("adminto.skill_type.edit", ["skill_type" => $skillType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SkillType $skillType)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $skillType->name = $request->name;
        $skillType->save();
        return redirect()->route('skill_type.index')->with('success', 'Skill type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillType $skillType)
    {
        $skillType->delete();
        return redirect()->route('functional.index')->with('success', 'Functional deleted successfully');
    }
}
