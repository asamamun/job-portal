<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("jobentry.link.index",["links" => Link::where('applicant_id', auth()->user()->applicant->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobentry.link.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|max:255',
        ]);
        $link = new Link();
        $link->applicant_id = auth()->user()->applicant->id;
        $link->title = $request->title;
        $link->url = $request->url;
        $link->save();
        return redirect()->route('link.index')->with('success', 'Link created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        echo "show called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view("jobentry.link.edit",["link" => $link]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|max:255',
        ]);
        $link->title = $request->title;
        $link->url = $request->url;
        $link->save();
        return redirect()->route('link.index')->with('success', 'Link updated successfully');       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('link.index')->with('success', 'Link deleted successfully');
    }
}
