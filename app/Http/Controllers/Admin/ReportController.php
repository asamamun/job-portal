<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Http\Controllers\Controller;
use App\Models\Income;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        //
    }
    public function showTotalReports()
    {
        $data = Income::all();
        $pdf = PDF::loadView('reports.report', compact('data'));
        return $pdf->stream('report.pdf');
        //return $pdf->download('report.pdf');
    }
    public function searchReportsPage(Request $request)
    {
        return view('adminto.reports.search');
    }
    public function searchReportsAction(Request $request)
    {
        $validation = $request->validate([
            'search_form' => 'required',
            'search_to' => 'required'
        ]);
        $data = Income::whereBetween('updated_at', [Carbon::parse($request->search_form), Carbon::parse($request->search_to)])->get();
        $pdf = PDF::loadView('reports.report', compact('data'));
        return $pdf->stream('report.pdf');
    }
    public function showDailyReports()
    {
        $data = Income::with('user')->whereDay('updated_at', now()->day)
            ->whereMonth('updated_at', now()->month)
            ->whereYear('updated_at', now()->year)
            ->get();
        $pdf = PDF::loadView('pdf.report', compact('data'));
        return $pdf->stream('report.pdf');
    }
}
