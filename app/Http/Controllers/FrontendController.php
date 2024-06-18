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
        $posts = Post::paginate(4);
        return view('jobentry.posts', compact('posts'));
    }
    public function single($id){
        $post = Post::find($id);
        return view('jobentry.single', compact('post'));
    }
}
