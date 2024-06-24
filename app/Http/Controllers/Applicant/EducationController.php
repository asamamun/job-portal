<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("jobentry.education.index",["educations" => Education::where('applicant_id', auth()->user()->applicant->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobentry.education.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required|max:50',
            'institute' => 'required|max:255',
            'board' => 'required|max:25',
            'duration' => 'required|max:50',
            'session' => 'required|max:50',
            'subject' => 'required|max:50',
            'group' => 'required',
            'division' => 'required',
            'grade' => 'required',
            'grade_out_of' => '',
            'passing_year' => '',
        ]);
    
    
        $education = new Education();
        $education->applicant_id = auth()->user()->applicant->id;
        $education->level = $request->level;
        $education->institute = $request->institute;
        $education->board = $request->board;
        $education->duration = $request->duration;
        $education->session = $request->session;
        $education->subject = $request->subject;
        $education->group = $request->group;
        $education->division = $request->division;
        $education->grade = $request->grade;
        $education->grade_out_of = $request->grade_out_of;
        $education->passing_year = $request->passing_year;
        $education->save();
    
        return redirect()->route('education.index')->with('success', 'Education created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        echo "show called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view("jobentry.education.edit", ["education" => $education]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'level' => 'required|max:50',
            'institute' => 'required|max:255',
            'board' => 'required|max:25',
            'duration' => 'required|max:50',
            'session' => 'required|max:50',
            'subject' => 'required|max:50',
            'group' => 'required',
            'division' => 'required',
            'grade' => 'required',
            'grade_out_of' => '',
            'passing_year' => '',
        ]);
    

        $education->level = $request->level;
        $education->institute = $request->institute;
        $education->board = $request->board;
        $education->duration = $request->duration;
        $education->session = $request->session;
        $education->subject = $request->subject;
        $education->group = $request->group;
        $education->division = $request->division;
        $education->grade = $request->grade;
        $education->grade_out_of = $request->grade_out_of;
        $education->passing_year = $request->passing_year;
        $education->save();
    
        return redirect()->route('education.index')->with('success', 'Education updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('education.index')->with('success', 'education deleted successfully');
    }
}
