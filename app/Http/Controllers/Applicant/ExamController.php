<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class ExamController extends Controller
{
	public function examPage()
    {
		return view('exam.index', [
			'questions' => Question::inRandomOrder()->limit(10)->get(),
		]);
	}
	public function examResult(Request $request)
    {
		$total = 0;
		$result = 0;
		$request = $request->all();
		unset($request['_token'], $request['submit']);
		foreach ($request as $questionId => $answer) {
			$total++;
			$question = Question::find($questionId);
			if ($question->answer == $answer) {
				$result++;
			}
		}
		return view('exam.result', [
			'total' => $total,
			'result' => $result,
			'status' => $result >= 6 ? 'Pass' : 'Fail',
		]);
	}
}
