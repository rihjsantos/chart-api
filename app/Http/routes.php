<?php

Route::get('/', [
	'as' => 'usage',
	'uses' => 'ApplicationController@usage'
]);

Route::post('helper', [
	'as' => 'helper',
	'uses' => 'ApplicationController@helper'
]);

Route::get('charts/pie', [
	'as' => 'piechart',
	'uses' => 'PieController@generateChart'
]);

Route::get('charts/line', [
	'as' => 'linechart',
	'uses' => 'LineController@generateChart'
]);

Route::post('charts/bar', [
	'as' => 'barchart',
	'uses' => 'BarController@generateChart'
]);

Route::get('charts/polar-area', [
	'as' => 'polar_area',
	'uses' => 'PolarAreaController@generateChart'
]);

Route::get('charts/radar', [
	'as' => 'radar',
	'uses' => 'RadarController@generateChart'
]);