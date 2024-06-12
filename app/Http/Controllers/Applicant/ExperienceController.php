<?php

namespace App\Http\Controllers\Applicant;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("jobentry.experience.index",["experiences" => Experience::where('applicant_id', auth()->user()->applicant->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobentry.experience.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'company' => 'required|max:255',
        'address' => 'required|max:255',
        'phone' => 'required|min:11|max:25',
        'position' => 'required|max:50',
        'department' => 'required|max:50',
        'description' => 'required|max:255',
        'from' => 'required|date',
        'to' => 'date',
    ]);

    $experience = new Experience();
    $experience->applicant_id = auth()->user()->applicant->id;
    $experience->company = $request->company;
    $experience->address = $request->address;
    $experience->phone = $request->phone;
    $experience->position = $request->position;
    $experience->department = $request->department;
    $experience->description = $request->description;
    $experience->from = $request->from;
    $experience->to = $request->to;
    $experience->save();

    return redirect()->route('experience.index')->with('success', 'Experience created successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        echo "show called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view("jobentry.experience.edit", ["experience" => $experience]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'company' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|min:11|max:25',
            'position' => 'required|max:50',
            'department' => 'required|max:50',
            'description' => 'required|max:255',
            'from' => 'required|date',
            'to' => 'date',
        ]);
    
        $experience->company = $request->company;
        $experience->address = $request->address;
        $experience->phone = $request->phone;
        $experience->position = $request->position;
        $experience->department = $request->department;
        $experience->description = $request->description;
        $experience->from = $request->from;
        $experience->to = $request->to;
        $experience->save();
    
        return redirect()->route('experience.index')->with('success', 'Experience updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experience.index')->with('success', 'experience deleted successfully');
    }
}
