<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    function asyncTest($type="bar") {

    	if($type=="bar"){    	

    		$json = '{
						"type" : "bar",
						"labels" : {
							"1st time", 
							"2nd time", 
							"3rd time", 
							"4th time", 
							"5th time", 
							"6th time", 
							"7th time", 
							"8th time"
						},
						"datasets" : [
							{
								"label" : "First bar",
								"data" : [55, 50, 45, 40, 35, 30, 25, 20]
							},
							{
								"label" : "Second bar",
								"data" : [20, 25, 30, 35, 40, 45, 50, 55]
							}
						]
					}';

			$array = json_encode($json);
			var_dump($json);
			var_dump($array);

    	}
    	var_dump($array);
    	return view('async.index', array('data' => $json));
    }
}
