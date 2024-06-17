<?php

namespace App\Http\Controllers\applicant;

use App\Http\Controllers\Controller;
use App\Models\Income;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Post;
use App\Models\Employer;
use DB;

class ApplyController extends Controller
{
    public function apply($id)
    {
        $result = DB::table('applicant_post')->where('post_id', $id)->where('applicant_id', auth()->user()->applicant->id)->first();
        if ($result) {
            return back()->with('error', 'You have already applied for this job');
        }

        $points = auth()->user()->applicant->points - 10;
        auth()->user()->applicant->points = $points;
        auth()->user()->applicant->save();

        $income = new Income();
        $income->user_id = auth()->user()->id;
        $income->points = 5;
        $income->description = 'Job Applyed';
        $income->type = 'income';
        $income->save();

        $employer_id = Post::find($id)->employer_id;
        $employer = Employer::find($employer_id);
        $employer->points = $employer->points + 5;
        $employer->save();

        DB::table('applicant_post')->insert([
            'post_id' => $id,
            'applicant_id' => auth()->user()->applicant->id,
            'created_at' => now(),
        ]);
        
        return back()->with('success', 'You have successfully applied for this job');
    }
}
