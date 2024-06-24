<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $applicant = Applicant::where("user_id", $id)->first();
        $applicant_id = $applicant->id;
        $experiences = Experience::where("applicant_id", $applicant_id)->get();
        $educations = Education::where("applicant_id", $applicant_id)->get();
        
        return view("cv.w3schools.index", [
            "user" => $user,
            "applicant" => $applicant,
            "experiences"=> $experiences,
            "educations"=> $educations
        ]);
    }
   
    public function download($id)
    {
        $user = User::find($id);
        $name = $user->name;
        $applicant = Applicant::where('user_id', $id)->first();
        $applicant_id = $applicant->id;
        $experiences = Experience::where('applicant_id', $applicant_id)->get();
        $educations = Education::where('applicant_id', $applicant_id)->get();

        $pdf = PDF::loadView('cv.w3schools.index', compact('all'));
        return $pdf->stream("{$name}_cv.pdf");
    }


    //cvpro
    public function indexcv($id)
    {
        $user = User::find($id);
        $applicant = Applicant::where("user_id", $id)->first();
        $applicant_id = $applicant->id;
        $experiences = Experience::where("applicant_id", $applicant_id)->get();
        $educations = Education::where("applicant_id", $applicant_id)->get();
        
        return view("cvpro.index", [
            "user" => $user,
            "applicant" => $applicant,
            "experiences"=> $experiences,
            "educations"=> $educations
        ]);
    }

    public function downloadcv($id)
    {
        $user = User::find($id);
        $name = $user->name;
        $applicant = Applicant::where("user_id", $id)->first();
        $applicant_id = $applicant->id;
        $experiences = Experience::where("applicant_id", $applicant_id)->get();
        $educations = Education::where("applicant_id", $applicant_id)->get();

        /* return view("cv.w3schools.index", [
            "user" => $user,
            "applicant" => $applicant,
            "experiences"=> $experiences,
            "educations"=> $educations
        ]); */

        $pdf = PDF::loadView("cvpro.index", [
            "user" => $user,
            "applicant" => $applicant,
            "experiences"=> $experiences,
            "educations"=> $educations
        ]);
        return $pdf->stream('cvpro.pdf');
    }
}
