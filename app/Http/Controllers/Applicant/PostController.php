<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\SavePost;
use Illuminate\Http\Request;

use DB;
use FontLib\Table\Type\post as TypePost;
use PhpParser\Node\Expr\AssignOp\Pow;
use Settings;

class PostController extends Controller
{
    public function save($id)
    {
        if (SavePost::where('post_id', $id)->where('applicant_id', auth()->user()->applicant->id)->exists()) {
            return back()->with('error', 'Post already saved');
        }
        $savepost = SavePost::create([
            'post_id' => $id,
            'applicant_id' => auth()->user()->applicant->id
        ]);
        return back()->with('success', 'Post saved successfully');
    }

    public function savePage()
    {
        $this->data['posts'] = SavePost::where('applicant_id', auth()->user()->applicant->id)
            ->with('post')  // Eager load the post relationship
            ->orderBy('id', 'desc')
            ->paginate(Settings::get()->paginate)
            ->through(function ($savepost) {
                return $savepost->post;
            });
        //dd($this->data['posts']);
        return view('jobentry.posts', $this->data);
    }
    public function delete()
    {
        //
    }
}
