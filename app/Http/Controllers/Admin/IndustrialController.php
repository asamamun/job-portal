<?php

namespace App\Http\Controllers\Admin;

use App\Models\Industrial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Artisan;
class IndustrialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("adminto.industrial.index",["industrials" => Industrial::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminto.industrial.create");
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
        $industrial = new Industrial();
        $industrial->name = $request->name;
        $industrial->icon = $request->icon;
        $industrial->save();
        Artisan::call('app:create-categories-json');
        return redirect()->route('industrial.index')->with('success', 'Industrial created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Industrial $industrial)
    {
        echo "show called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Industrial $industrial)
    {
        return view("adminto.industrial.edit", ["industrial" => $industrial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Industrial $industrial)
    {
        $request->validate([
            'name' => 'required|max:255',
            'icon' => 'required|max:255',
        ]);
        $industrial->name = $request->name;
        $industrial->icon = $request->icon;
        $industrial->save();
        Artisan::call('app:create-categories-json');
        return redirect()->route('industrial.index')->with('success', 'Industrial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industrial $industrial)
    {
        $industrial->delete();
        Artisan::call('app:create-categories-json');
        return redirect()->route('industrial.index')->with('success', 'Industrial deleted successfully');
    }
}
