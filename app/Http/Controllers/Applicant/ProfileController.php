<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Applicant;

class ProfileController extends Controller
{
    public function index()
    {
        return view("jobentry.profile");
    }
    public function imageUpdate()
    {
        $validation = request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $id = auth()->user()->id;
        $user = User::find($id);
        $imageName = time().'.'.$validation['image']->extension();
        $validation['image']->storeAs('public/img', $imageName);
        $user->image = "img/".$imageName;
        $user->save();
        return redirect()->route('applicant.profile')->with('success','image uploaded successfully');  
    }
    
    public function create()

    {
        return view('jobentry.profile.create');
}


public function store(Request $request)
{
    //
   
}

/**
 * Display the specified resource.
 */
public function show(Applicant $profile)
{
    echo "show called";
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(Applicant $profile)
{
//
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request)
{
// dd($request->all());
    $request->validate([
        'title' => '',
        'objective' => '',
        'father' => '',
        'mother' => '',
        'nid' => '',
        'file' => '',
        'cv' => '',
        'jobtype' => '',
        'location' => '',
        'dob' => '',
        'gender' => '',
        'religion' => '',
        'nationality' => '',
        'marital' => '',
        'type' => '',
        'available_for' => '',
        'points' => '',
        'status' => '',

    ]);
    Applicant::where('id', auth()->user()->applicant->id)->update([
        'title' => $request->title,
        'objective' => $request->objective,
        'father' => $request->father,
        'mother' => $request->mother,
        'nid' => $request->nid,
        'file' => $request->file,
        'cv' => $request->cv,
        'jobtype' => $request->jobtype,
        'location' => $request->location,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'religion' => $request->religion,
        'nationality' => $request->nationality,
        'marital' => $request->marital,
        'type' => $request->type,
        'available_for' => $request->available_for,
        'points' => $request->points,
        'status' => $request->status,
    ]);
    return redirect()->route('applicant.profile')->with('success', 'profile updated successfully');

}

/**
 * Remove the specified resource from storage.
 */
public function destroy(Applicant $profile)
{
    // 
}
}

