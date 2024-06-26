<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\SavePost;
use Illuminate\Http\Request;

use DB;

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

    public function delete()
    {
        //
    }
}
