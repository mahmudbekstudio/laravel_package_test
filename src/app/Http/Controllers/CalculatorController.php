<?php
namespace Mahmudbekstudio\Calculator\App\Http\Controllers;

use Illuminate\Http\Request;
use Mahmudbekstudio\Calculator\App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
	public function add($a, $b){
		$result = $a + $b;
		return view('calculator::add', compact('result'));
	}

	public function subtract($a, $b){
		echo $a - $b;
	}
}
