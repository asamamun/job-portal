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
        return view("adminto.functional.index");
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Functional $functional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Functional $functional)
    {
        //
    }
}
