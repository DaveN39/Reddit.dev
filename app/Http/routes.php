<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uppercase/{string}', function($string) {
	$data['string'] = strtoupper($string);
	return view('uppercase', $data);
});

Route::get('/increment/{number}', function($number) {
	if(is_numeric($number)) {
		return $number + 1;
	} else {
		return 1;
	}
});

Route::get('/add/{a}/{b}', function($a, $b)  {
	if(is_numeric($a) && is_numeric($b)) {
		return $a = $b;
	}
});

 
