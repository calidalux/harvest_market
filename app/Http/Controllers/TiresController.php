<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Tire;
use App\Http\Controllers\Controller;
use Input;
use Form;

use Illuminate\Http\Request;


class TiresController extends Controller {
	
	public function index()
	{
		$tires = Tire::all();
		
		return view('tires', compact('tires'));

	}

	public function cart($slug)
	{
		$tire = Tire::where('slug', '=', $slug)->firstOrFail();
		return view('cart', compact('tire'));
	}

	public function done()
	{
		return view('done');
	}
	

}
