<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BarController extends Controller {

	// Validate, colorize and show the chart
    public function generateChart(Request $request) {
		header("Access-Control-Allow-Origin: *");
		header('Access-Control-Allow-Credentials: true');

		$json = $request->input('data');
		if ($this->validateJson($json)) {
			$json = $this->colorize($json);
			return view('charts.bar',array('data' => str_replace('"',"'",json_encode($json))));
		} else {

		}
	}

	// Everything is fine, so draw the chart
	protected function validateJson($json) {
		if (is_array($json)) {
			foreach ($json as $item) {
				if (!array_key_exists('label', $item) || !array_key_exists('value', $item)) {					
					abort(500, 'Ooops. I saw what you did here. Try to send a well-formed data.');
					return false;
				}
			}
		} else {
			abort(500, 'Ooops. I saw what you did here. Try to send a well-formed data.');
		}
		return true;
	}

	// let's add some color to our chart
	protected function colorize($json) {
		if (is_array($json)) {

		}

		return $json;
	}
}