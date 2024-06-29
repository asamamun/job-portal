<?php

namespace App\Http\Controllers;

use DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Applicant;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Link;
use App\Models\Project;
use App\Models\Reference;
use App\Models\Skill;
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
        $skills = Skill::with('SkillType')->where('applicant_id', $applicant_id)->get();
        $languages = Language::where('applicant_id', $applicant_id)->get();
        $links = Link::where('applicant_id', $applicant_id)->get();
        $references = Reference::where('applicant_id', $applicant_id)->get();
        $projects = Project::where('applicant_id', $applicant_id)->get();

        $imagePath = public_path('storage/' . ($user->image ? $user->image : 'img/no_image.png'));
        $imageBase64 = imageToBase64($imagePath);
        return view("cv.w3schools.index", [
            "user" => $user,
            "image" => $imageBase64,
            "applicant" => $applicant,
            "experiences"=> $experiences,
            "educations"=> $educations,
            "skills"=> $skills,
            "languages"=> $languages,
            "links"=> $links,
            "references"=> $references,
            "projects"=> $projects
        


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
        $skills = Skill::with('SkillType')->where('applicant_id', $applicant_id)->get();
        $languages = Language::where('applicant_id', $applicant_id)->get();
        $links = Link::where('applicant_id', $applicant_id)->get();
        $references=Reference::where('applicant_id', $applicant_id)->get();
        $projects=Project::where('applicant_id', $applicant_id)->get();
     

        
        $imagePath = public_path('storage/' . ($user->image ? $user->image : 'img/no_image.png'));
        $imageBase64 = imageToBase64($imagePath);
        
        
        
        $pdf = Pdf::loadView('cv.w3schools.index', [
            "user" => $user,
            "image" => $imageBase64,
            "applicant" => $applicant,
            "experiences"=> $experiences,
            "educations"=> $educations,
            "skills"=> $skills,
            "languages"=> $languages,
            "links"=> $links,
            "references"=>$references,
            "projects"=>$projects
           
        ]);
        /* $pdf->setPaper('A4', 'landscape');
        $pdf->getFontMetrics()->registerFont(
            ['family' => 'Montserrat', 'style' => 'normal', 'weight' => 'normal'],
            public_path('fonts/Montserrat-Regular.ttf')
        ); */
        return $pdf->stream('document.pdf');
    }


    //cvpro
    public function indexcv($id)
    {
        $user = User::find($id);
        $applicant = Applicant::where("user_id", $id)->first();
        $applicant_id = $applicant->id;
        $experiences = Experience::where("applicant_id", $applicant_id)->get();
        $educations = Education::where("applicant_id", $applicant_id)->get();
      $skills = Skill::with('SkillType')->where('applicant_id', $applicant_id)->get();
        $languages = Language::where('applicant_id', $applicant_id)->get();
        $links = Link::where('applicant_id', $applicant_id)->get();
        $references = Reference::where('applicant_id', $applicant_id)->get();
        $projects = Project::where('applicant_id', $applicant_id)->get();
        
        
        return view("cvpro.index", [
            "user" => $user,
            "applicant" => $applicant,
            "experiences"=> $experiences,
            "educations"=> $educations,
            "skills"=> $skills,
            "languages"=> $languages,
            "links"=> $links,
            "references"=> $references,
            "projects"=> $projects

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
        $skills = Skill::with('SkillType')->where('applicant_id', $applicant_id)->get();
        $languages = Language::where('applicant_id', $applicant_id)->get(); 
        $links = Link::where('applicant_id', $applicant_id)->get();
        $references = Reference::where('applicant_id', $applicant_id)->get();
        $projects = Project::where('applicant_id', $applicant_id)->get();

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
            "educations"=> $educations,
            "skills"=> $skills,
            "languages"=> $languages,
            "links"=> $links,
            "references"=> $references,
            "projects"=> $projects

        ]);
        return $pdf->stream('cvpro.pdf');
    }
}
