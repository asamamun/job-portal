<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminto.settings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return view('adminto.settings');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $setting->title = $request->title;
        $setting->keywords = $request->keywords;
        $setting->author = $request->author;
        $setting->description = $request->description;
        $setting->paginate = $request->paginate;
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconname = time() . '.' . $icon->getClientOriginalExtension();
            $icon->storeAs('public/icon', $iconname);
            $setting->icon = "icon/" . $iconname;
        }
        $setting->save();
        return redirect()->route('settings.edit', 1)->with('success', 'Setting updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
