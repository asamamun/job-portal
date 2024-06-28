<?php

namespace App\Http\Controllers\Admin;

 
use App\Models\Income;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    public function dailyIncomeExpense()
    {
        $currentMonth = Carbon::now();
        $daysInMonth = $currentMonth->daysInMonth;
        $days = [];
        $incomes = [];
        $expenses = [];

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $date = Carbon::create($currentMonth->year, $currentMonth->month, $day);
            $days[] = $date->format('d');

            $dailyIncome = Income::whereDate('created_at', $date)
                ->where('type', 'income')
                ->sum('points');

            $dailyExpense = Income::whereDate('created_at', $date)
                ->where('type', 'expense')
                ->sum('points');

            $incomes[] = $dailyIncome;
            $expenses[] = $dailyExpense;
        }

        return view('chart.daily-chart', compact('days', 'incomes', 'expenses'));
    }
    public function monthlyIncomeExpense()
    {
        $currentYear = Carbon::now()->year;
        $months = [];
        $incomes = [];
        $expenses = [];

        for ($month = 1; $month <= 12; $month++) {
            $months[] = Carbon::create($currentYear, $month, 1)->format('M');

            $monthlyIncome = Income::whereYear('created_at', $currentYear)
                ->whereMonth('created_at', $month)
                ->where('type', 'income')
                ->sum('points');

            $monthlyExpense = Income::whereYear('created_at', $currentYear)
                ->whereMonth('created_at', $month)
                ->where('type', 'expense')
                ->sum('points');

            $incomes[] = $monthlyIncome;
            $expenses[] = $monthlyExpense;
        }

        return view('chart.monthly-chart', compact('months', 'incomes', 'expenses'));
    }
}