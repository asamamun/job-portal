<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Employer;
use App\Models\Applicant;
use App\Models\Income;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Mail\Gmail;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('adminto.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        //dd($request);
        $request->validate([
            'roles' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'roles' => $request->roles,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $role = Auth::user()->roles;
        $id = Auth::user()->id;
        if($role == 'admin'){
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }
        if($role == 'employer'){
            if(Employer::where('user_id', $id)->exists()){
                return redirect()->intended(route('employer.dashboard', absolute: false));
            }
            $employer = Employer::create([
                'user_id'=> $id,
                'points' => 200
            ]);
			
			$income = new Income();
			$income->user_id = auth()->user()->id;
			$income->points = 200;
			$income->description = 'Employer Account';
			$income->type = 'expense';
			$income->save();
			Mail::to(Auth::user()->email)->send(new Gmail(Auth::user()->name));
            return redirect()->intended(route('employer.dashboard', absolute: false));
        }
        if($role == 'applicant'){
            if(Applicant::where('user_id', $id)->exists()){
                return redirect()->intended(route('employer.dashboard', absolute: false));
            }
            $applicant = Applicant::create([
                'user_id'=> $id,
                'points' => 20
            ]);
			
			$income = new Income();
			$income->user_id = auth()->user()->id;
			$income->points = 20;
			$income->description = 'Applicant Account';
			$income->type = 'expense';
			$income->save();
			Mail::to(Auth::user()->email)->send(new Gmail(Auth::user()->name));
            return redirect()->intended(route('home', absolute: false));
        } 
        return redirect()->intended(route('home', absolute: false));
    }
}
