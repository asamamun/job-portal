<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Result;
use App\Models\Income;

class ExamController extends Controller
{
	public function examPage()
    {
		if(auth()->user()->status == '1'){
			auth()->user()->status = '0';
			auth()->user()->save();
		}else{
			$points = auth()->user()->applicant->points - 5;
			auth()->user()->applicant->points = $points;
			auth()->user()->applicant->save();
	
			$income = new Income();
			$income->user_id = auth()->user()->id;
			$income->points = 5;
			$income->description = 'Exam Fees';
			$income->type = 'income';
			$income->save();
		}
		
		return view('exam.index', [
			'questions' => Question::inRandomOrder()->limit(10)->get(),
		]);
	}
	public function examResult(Request $request)
    {
		$total = 0;
		$marks = 0;
		$request = $request->all();
		unset($request['_token'], $request['submit']);
		foreach ($request as $questionId => $answer) {
			$total++;
			$question = Question::find($questionId);
			if ($question->answer == $answer) {
				$marks++;
			}
		}
		$cutmark = ($total * 60) / 100;
		$status = $marks >= $cutmark ? 'pass' : 'fail';
		if ($status == 'pass') {
			$income = new Income();
			$income->user_id = auth()->user()->id;
			$income->points = 10;
			$income->description = 'Exam Pass Award';
			$income->type = 'expense';
			$income->save();
		}
		$result = new Result();
        $result->applicant_id = auth()->user()->applicant->id;
        $result->marks = $marks;
        $result->marks_outof = $total;
        $result->status = $status;
        $result->save();

		return view('exam.result', [
			'total' => $total,
			'marks' => $marks,
			'status' => $status,
		]);
	}
}
