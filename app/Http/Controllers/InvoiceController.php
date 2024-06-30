<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Applicant;
use App\Models\Employer;
use App\Models\Recharge;
use App\Models\User;


class InvoiceController extends Controller
{
    public function invoice($tid){
        $recharge = Recharge::with(['user:name,email,id,roles'])->where('transaction_id', $tid)->first();
        $pdf = PDF::loadView('pdf.invoice', compact('recharge'));
        return $pdf->stream('invoice.pdf');
    }
}
