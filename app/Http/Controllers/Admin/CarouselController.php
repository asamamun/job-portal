<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("adminto.carousel.index", ["carousels" => Carousel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminto.carousel.create", ["carousels" => Carousel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'header' => 'required|max:255',
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048',
        ]);

        $carousel = new Carousel();
        $carousel->header = $request->header;
        $carousel->title = $request->title;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/img', $fileName);
            $carousel->image = 'img/' . $fileName;
        }

        $carousel->save();

        return redirect()->route('carousel.index')->with('success', 'Carousel created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        return view("adminto.carousel.edit", ["carousel" => $carousel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        $request->validate([
            'header' => 'required|max:255',
            'title' => 'required|max:255',
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048",
        ]);
        $carousel->header = $request->header;
        $carousel->title = $request->title;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $request->image->extension();
            $file->storeAs('public/img', $fileName);
            $carousel->image = "img/" . $fileName;
        }
        $carousel->update();
        return redirect()->route('carousel.index')->with('success', 'Carousel updated successfully')->with([
            'header' => $carousel->header,
            'title' => $carousel->title,
            'image' => $carousel->image
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();
        return redirect()->route('carousel.index')->with('success', 'Carousel deleted successfully');
    }
}
