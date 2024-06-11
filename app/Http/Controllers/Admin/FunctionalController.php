<?php

namespace App\Http\Controllers\Admin;

use App\Models\Functional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FunctionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("adminto.functional.index",["functionals" => Functional::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminto.functional.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'icon' => 'required|max:255',
        ]);
        $functional = new Functional();
        $functional->name = $request->name;
        $functional->icon = $request->icon;
        $functional->save();
        return redirect()->route('functional.index')->with('success', 'Functional created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Functional $functional)
    {
        echo "show called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Functional $functional)
    {
        return view("adminto.functional.edit", ["functional" => $functional]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Functional $functional)
    {
        $request->validate([
            'name' => 'required|max:255',
            'icon' => 'required|max:255',
        ]);
        $functional->name = $request->name;
        $functional->icon = $request->icon;
        $functional->save();
        return redirect()->route('functional.index')->with('success', 'Functional updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Functional $functional)
    {
        //
    }
}
