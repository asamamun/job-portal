<?php

namespace App\Http\Controllers\applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use DB;

class ApplyController extends Controller
{
    public function apply($id)
    {
        $result = DB::table('applicant_post')->where('post_id', $id)->where('applicant_id', auth()->user()->applicant->id)->first();
        if($result)
        {
            return back()->with('error', 'You have already applied for this job');
        }
        DB::table('applicant_post')->insert([
           'post_id' => $id,
           'applicant_id' => auth()->user()->applicant->id,
           'created_at' => now(),
        ]);
       return back()->with('success', 'You have successfully applied for this job');
    }
}
