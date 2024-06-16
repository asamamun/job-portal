<?php

namespace App\Http\Controllers\employer;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Functional;
use App\Models\Industrial;
use App\Models\Special;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("adminto.posts.create", [
            "functionals" => Functional::all(),
            "industrials" => Industrial::all(),
            "specials" => Special::all(),
            "countries" => Country::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            "title" => "required",
            "description" => "required",
            "functional_id" => "required",
            "industrial_id" => "required",
            "special_id" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
            "address" => "required",
            "contact" => "required",
            "deadline" => "required",
            "expires" => "required",
        ]);
        $post = new Post();
        $post->employer_id = auth()->user()->employer->id;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->functional_id = $request->functional_id;
        $post->industrial_id = $request->industrial_id;
        $post->special_id = $request->special_id;
        $post->type = $request->type;
        $post->salary = $request->salary;
        $post->experience = $request->experience;
        $post->qualification = $request->qualification;
        $post->vacancy = $request->vacancy;
        $post->country_id = $request->country_id;
        $post->state_id = $request->state_id;
        $post->address = $request->address;
        $post->contact = $request->contact;
        $post->email = $request->email;
        $post->website = $request->website;

        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/img', $imageName);
        $post->image = "img/".$imageName;
        
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/file', $filename);
            $post->file = "file/".$filename;
        }

        $post->deadline = $request->deadline;
        $post->expires = $request->expires;
        $post->save();
        return redirect()->back()->with("success", "Post added successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
