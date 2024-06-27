<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index()
    {
        return view('withdraw');
    }
    public function store(Request $request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $roles = $user->roles;
            $req_point = (int)$request->points;

            if ($roles == 'applicant') {
                $points = $user->applicant->points;
                if ($points >= $req_point) {
                    $user->applicant->points = $points - $req_point;
                    $user->applicant->save();
                }else{
                    return redirect()->back()->with('error', 'Insufficient Points'); 
                }
            }
            if ($roles == 'employer') {
                $points = $user->employer->points;
                if ($points >= $req_point) {
                    $user->employer->points = $points - $req_point;
                    $user->employer->save();
                }else{
                    return redirect()->back()->with('error', 'Insufficient Points'); 
                }
            }

            $withdraw = new Withdraw();
            $withdraw->user_id = $user->id;
            $withdraw->points = $request->points;
            $withdraw->types = $request->types;
            $withdraw->account = $request->account;
            $withdraw->account_number = $request->account_number;
            $withdraw->save();
            return redirect()->back()->with('success', 'Withdraw Request Sent');
        }
        return redirect('/login');
    }
}
