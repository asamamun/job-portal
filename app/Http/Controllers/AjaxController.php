<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use Illuminate\Support\Facades\Storage;

class AjaxController extends Controller
{
    function stateAjax($country_id) {
		$state = State::where('country_id', $country_id)->get();
		$send_ajax_data = "<option>Select State</option>";
		foreach($state as $state_key => $state_value){
			$send_ajax_data .= "<option value='{$state_value->id}'>{$state_value->name}</option>";
		}
		echo $send_ajax_data;
	}
	function postCatAjax() {
		$filePath = public_path('cat.json');
		return response()->json(json_decode(file_get_contents($filePath)));	
	}
}
