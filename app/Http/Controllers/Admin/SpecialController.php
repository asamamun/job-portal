<?php

namespace App\Http\Controllers\Admin;

use App\Models\Special;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Artisan;
class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("adminto.special.index",["specials" => Special::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminto.special.create");
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
        $special = new Special();
        $special->name = $request->name;
        $special->icon = $request->icon;
        $special->save();
        Artisan::call('app:create-categories-json');
        return redirect()->route('special.index')->with('success', 'Special created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Special $special)
    {
        echo "show called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Special $special)
    {
        return view("adminto.special.edit", ["special" => $special]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Special $special)
    {
        $request->validate([
            'name' => 'required|max:255',
            'icon' => 'required|max:255',
        ]);
        $special->name = $request->name;
        $special->icon = $request->icon;
        $special->save();
        Artisan::call('app:create-categories-json');
        return redirect()->route('special.index')->with('success', 'Special updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Special $special)
    {
        $special->delete();
        Artisan::call('app:create-categories-json');
        return redirect()->route('special.index')->with('success', 'Special deleted successfully');
    }
}
