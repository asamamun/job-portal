<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Withdraw;

class WithdrawController extends Controller
{
    public function index(){
        $withdraws = Withdraw::with('user')->get();
        return view('adminto.withdraw.admin.index',compact('withdraws'));
    }
    public function requestPage(){
        $withdraws = Withdraw::with('user')->where('status','request')->get();
        return view('adminto.withdraw.admin.index',compact('withdraws'));
    }
    public function rejectPage(){
        $withdraws = Withdraw::with('user')->where('status','rejected')->get();
        return view('adminto.withdraw.admin.index',compact('withdraws'));
    }
    public function reject($id)
    {
        $user = auth()->user();
        $roles = $user->roles;

        $withdraw = Withdraw::find($id);
        $withdraw->status = 'rejected';
        $withdraw->save();

        if ($roles == 'applicant') {
            $user->applicant->points = $user->applicant->points + $withdraw->points;
            $user->applicant->save();
        }
        if ($roles == 'employer') {
            $user->employer->points = $user->employer->points + $withdraw->points;
            $user->employer->save();
        }

        return redirect()->back()->with('success', 'Withdraw Request Rejected');
    }
    public function approvePage(){
        $withdraws = Withdraw::with('user')->where('status','approved')->get();
        return view('adminto.withdraw.admin.index',compact('withdraws'));
    }
    public function approve($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'approved';
        $withdraw->save();
        return redirect()->back()->with('success', 'Withdraw Request Approved');
    }
}
