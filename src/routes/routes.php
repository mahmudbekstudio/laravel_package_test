<?php
//use \Illuminate\Support\Facades\Route;

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Devdojo\Calculator\App\Http\Controllers\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devdojo\Calculator\App\Http\Controllers\CalculatorController@subtract');