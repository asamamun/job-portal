<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("adminto.advertisement.index",["advertisements" => Advertisement::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminto.advertisement.create",["advertisements" => Advertisement::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        
        $request->validate([
            'title' => 'required|max:255',
            "file" => "required|image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048",
        ]);

        $advertisement = new Advertisement();
        $advertisement->title = $request->title;

        $fileName = time() . '.' . $request->file->extension();
        $request->file->storeAs('public/img', $fileName);
        $advertisement->file = "img/" . $fileName;

        $advertisement->save();
        return redirect()->route('advertisement.index')->with('success', 'Advertisement created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertisement $advertisement)
    {
        return view("adminto.advertisement.edit", ["advertisement" => $advertisement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $request->validate([
            'title' => 'required|max:255',
            "file" => "image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
        ]);
        $advertisement->title = $request->title;
        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->storeAs('public/img', $fileName);
            $advertisement->file = "img/" . $fileName;
        }

        $advertisement->save();
        return redirect()->route('advertisement.index')->with('success', 'Advertisement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect()->route('advertisement.index')->with('success', 'Advertisement deleted successfully');
    }
}
