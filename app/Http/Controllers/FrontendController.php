<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('jobentry.index');
    }
    public function all()
    {
        $posts = Post::all();
        return view('jobentry.posts', compact('posts'));
    }
}
