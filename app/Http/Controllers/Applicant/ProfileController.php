<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Controllers\Applicant;

class ProfileController extends Applicant
{
    public function index()
    {
        return view('jobentry.profile', $this->data);
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
    public function update()
    {
        /* $validation = request()->validate([
            'name' => 'required',
        ]) */
    }
}
