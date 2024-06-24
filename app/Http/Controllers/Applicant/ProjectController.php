<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("jobentry.project.index",["projects" => Project::where('applicant_id', auth()->user()->applicant->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobentry.project.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'url' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required',

        ]);
        $project = new Project();
        $project->applicant_id = auth()->user()->applicant->id;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->url = $request->url;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = $request->status;
        $project->save();
        return redirect()->route('project.index')->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        echo "show called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("jobentry.project.edit",["project" => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'url' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required', 
        ]);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->url = $request->url;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = $request->status;
        $project->save();
        return redirect()->route('project.index')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }
}
