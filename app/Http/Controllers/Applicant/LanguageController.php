<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        return view("jobentry.language.index",["languages" => Language::where('applicant_id', auth()->user()->applicant->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobentry.language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'level' => 'required|max:255',
            'type' => 'required|max:255',
        ]);

        $language = new Language();
        $language->applicant_id = auth()->user()->applicant->id;
        $language->name = $request->name;
        $language->level = $request->level;
        $language->type = $request->type;
        $language->save();        
        return redirect()->route('language.index')->with('success', 'Language created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
      echo "show called";   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        return view('jobentry.language.edit', ['language' => $language]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $request->validate([
            'name' => 'required|max:255',
            'level' => 'required|max:255',
            'type' => 'required|max:255',
        ]);
        $language->name = $request->name;
        $language->level = $request->level;
        $language->type = $request->type;
        $language->save();        
        return redirect()->route('language.index')->with('success', 'Language updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return redirect()->route('language.index')->with('success', 'Language deleted successfully');
    }
}
