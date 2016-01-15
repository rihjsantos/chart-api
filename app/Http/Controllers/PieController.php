<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PieController extends Controller {

	public function generateChart(Request $request) {
		$json = $request->input('data');

		if ($this->validateJson($json)) {
			return view('pie.index', array(
				"data" => $json
			));
		} else {

		}
	}

	protected function validateJson($json) {
		return true;
	}
}
