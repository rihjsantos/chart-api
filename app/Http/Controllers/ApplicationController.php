<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    function usage() {
    	return view('helper');
    }

    function helper(Request $request) {
    	$type = $request->input('type');
    	return view('helper.'.$type);
    }

    function teste(Request $request) {
    	return view('test.test');
    }
}
