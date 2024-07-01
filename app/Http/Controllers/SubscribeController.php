<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribes,email',
        ]);
        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();
        return back()->with('success', 'Thanks for subscribing');
    }
}
