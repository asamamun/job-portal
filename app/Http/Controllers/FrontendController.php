<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Functional;
use App\Models\Industrial;
use App\Models\Post;
use App\Models\Country;
use App\Models\Setting;
use App\Models\Special;
use Illuminate\Http\Request;
use Settings;

class FrontendController extends Controller
{
    public $data = [];
    public function __construct()
    {
        $functionals = Functional::all();
        $industrials = Industrial::all();
        $specials = Special::all();
        $employers = Employer::all();
        $countries = Country::all();
        $this->data["functionals"] = $functionals;
        $this->data["industrials"] = $industrials;
        $this->data["specials"] = $specials;
        $this->data["employers"] = $employers;
        $this->data["countries"] = $countries;
    }
    public function index()
    {
        return view('jobentry.index', $this->data);
    }
    public function all()
    {
        $this->data["posts"] = Post::paginate(Settings::get()->paginate);
        return view('jobentry.posts', $this->data);
    }
    public function single($id)
    {
        $post = Post::find($id);
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
    public function employer($id)
    {
        $this->data["posts"] = Post::where('employer_id', $id)->orderBy('id', 'desc')->paginate(Settings::get()->paginate);
        return view('jobentry.posts', $this->data);
    }
    public function search(Request $request)
    {
        $query = Post::where('title', 'like', '%' . $request->keyword . '%')->orderBy('id', 'desc');

        if ($request->has('country_id') && $request->country_id != "Select Country") {
            $query->where('country_id', $request->country_id);
        }

        if ($request->has('state_id')) {
            $query->where('state_id', $request->state_id);
        }

        $this->data['posts'] = $query->paginate(Settings::get()->paginate);

        return view('jobentry.posts', $this->data);
    }
}
