<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Functional;
use App\Models\Industrial;
use App\Models\Post;
use App\Models\SavePost;
use App\Models\Country;
use App\Models\Setting;
use App\Models\Special;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Settings;

use App\Http\Controllers\Applicant;

class FrontendController extends Applicant
{
    public function __construct()
    {
        parent::__construct();
        $this->data["carousels"] = Carousel::all();
    }
    public function index()
    {
        return view('jobentry.index', $this->data);
    }
    public function about()
    {
        return view('jobentry.about', $this->data);
    }
    public function all()
    {
        $this->data["posts"] = Post::orderBy('id', 'desc')->paginate(Settings::get()->paginate);
        return view('jobentry.posts', $this->data);
    }
    public function single($id)
    {
        $post = Post::with('employer', 'functional', 'industrial', 'special')->find($id);
        return view('jobentry.single', compact('post'));
    }
    public function functional($id)
    {
        $this->data["posts"] = Post::where('functional_id', $id)->orderBy('id', 'desc')->paginate(Settings::get()->paginate);
        return view('jobentry.posts', $this->data);
    }
    public function industrial($id)
    {
        $this->data["posts"] = Post::where('industrial_id', $id)->orderBy('id', 'desc')->paginate(Settings::get()->paginate);
        return view('jobentry.posts', $this->data);
    }
    public function special($id)
    {
        $this->data["posts"] = Post::where('special_id', $id)->orderBy('id', 'desc')->paginate(Settings::get()->paginate);
        return view('jobentry.posts', $this->data);
    }
    public function employer($id)
    {
        $this->data["posts"] = Post::where('employer_id', $id)->orderBy('id', 'desc')->paginate(Settings::get()->paginate);
        return view('jobentry.posts', $this->data);
    }
    public function search(Request $request)
    {
        if ($request->has('title')){
            $query = Post::where('title', 'like', '%' . $request->keyword . '%');
        }else{
            $query = Post::query();
        }

        if ($request->has('country_id') && $request->country_id != "Select Country") {
            $query->where('country_id', $request->country_id);
        }

        if ($request->has('state_id') && $request->state_id != "Select State") {
            $query->where('state_id', $request->state_id);
        }

        $this->data['posts'] = $query->orderBy('id', 'desc')->paginate(Settings::get()->paginate);

        return view('jobentry.posts', $this->data);
    }
}
