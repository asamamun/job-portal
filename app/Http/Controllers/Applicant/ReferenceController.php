<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("jobentry.reference.index",["references" => Reference::where('applicant_id', auth()->user()->applicant->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobentry.reference.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

         'name' => 'required|max:255',
         'organization' => 'required|max:255',
         'designation' => 'required|max:255',
         'phone' => 'required|min:11|max:25',
         'relation' => 'required|max:255',
         'email' => 'required|email',
         'address' => 'required|max:255',

        ]);
        $reference = new Reference();
        $reference->applicant_id = auth()->user()->applicant->id;
        $reference->name = $request->name;
        $reference->organization = $request->organization;
        $reference->designation = $request->designation;
        $reference->phone = $request->phone;
        $reference->relation = $request->relation;
        $reference->email = $request->email;
        $reference->address = $request->address;
        $reference->save();
        return redirect()->route('reference.index')->with('success', 'Reference created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Reference $reference)
    {
        echo "show called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reference $reference)
    {
        return view("jobentry.reference.edit",["reference" => $reference]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reference $reference)
    {

        $request->validate([
            'name' => 'required|max:255',
            'organization' => 'required|max:255',
            'designation' => 'required|max:255',
            'phone' => 'required|min:11|max:25',
            'relation' => 'required|max:255',
            'email' => 'required|email',
            'address' => 'required|max:255',
        ]);
        $reference->name = $request->name;
        $reference->organization = $request->organization;
        $reference->designation = $request->designation;
        $reference->phone = $request->phone;
        $reference->relation = $request->relation;
        $reference->email = $request->email;
        $reference->address = $request->address;
        $reference->save();
    
        return redirect()->route('reference.index')->with('success', 'Reference updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reference $reference)
    {
        $reference->delete();
        return redirect()->route('reference.index')->with('success', 'Reference deleted successfully');
    }
}
