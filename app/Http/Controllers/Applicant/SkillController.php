<?php

namespace App\Http\Controllers\Applicant;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SkillType;

use App\Http\Controllers\Applicant;

class SkillController extends Applicant
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // Fetch skills associated with the authenticated user's applicant profile
        $skills = Skill::where('applicant_id', auth()->user()->applicant->id)->get();
        
        return view("jobentry.skill.index", compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all skill types
        $skilltypes = SkillType::all();

        return view("jobentry.skill.create", compact('skilltypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skill_type_id' => 'required',
            'level' => 'required',
        ]);

        // Create a new skill instance
        $skill = new Skill();
        $skill->applicant_id = auth()->user()->applicant->id;
        $skill->skill_type_id = $request->skill_type_id;
        $skill->level = $request->level;
        $skill->save();

        return redirect()->route('skill.index')->with('success', 'Skill created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        // Fetch all skill types
        $skilltypes = SkillType::all();

        return view("jobentry.skill.edit", compact('skill', 'skilltypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'skill_type_id' => 'required',
            'level' => 'required',
        ]);

        // Update skill details
        $skill->skill_type_id = $request->skill_type_id;
        $skill->level = $request->level;
        $skill->save();

        return redirect()->route('skill.index')->with('success', 'Skill updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skill.index')->with('success', 'Skill deleted successfully');
    }
}
