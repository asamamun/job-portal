<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CvMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function cvPage(Request $request)
    {
      $cvlink = url()->previous();
      return view("jobentry.send", ["cvlink" => $cvlink]);
    }
    public function cvLink(Request $request)
    {
      Mail::to($request->email)->send(new CvMail($request->subject, $request->cvlink));
      return view("jobentry.send", ["cvlink" => $request->cvlink])->with('success', 'Email sent successfully');
    }
}
