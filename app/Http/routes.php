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

Route::get('charts/bar', [
	'as' => 'barchart',
	'uses' => 'BarController@generateChart'
]);