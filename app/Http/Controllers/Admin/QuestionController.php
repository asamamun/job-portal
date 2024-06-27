<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("adminto.question.index", [
            "questions" => Question::with("Category")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminto.question.create", [
            "categories" => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "question" => "required",
            "category_id" => "required",
            "option_one" => "required",
            "option_two" => "required",
            "answer" => "required",
        ]);
        Question::create($request->all());
        // echo "success";
        return redirect()->route("question.index")->with("success", "Question created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        return view("adminto.question.show", [
            "question" => $question,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        $categories = Category::all();
        return view("adminto.question.edit", [
            "question" => $question,
            "categories"=> $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            "question" => "required",
            "category_id" => "required",
            "option_one" => "required",
            "option_two" => "required",
            "answer" => "required",
        ]);
        $question->update($request->all());
        return redirect()->route("question.index")->with("success", "Question updated successfully");   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route("question.index")->with("success", "Question deleted successfully");
    }
}
