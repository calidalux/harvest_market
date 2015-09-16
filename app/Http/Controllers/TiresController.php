<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Tire;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class TiresController extends Controller {
	
	public function index()
	{
		$tires = Tire::all();
		
		return view('tires', compact('tires'));

	}

	public function cart($id)
	{
		$tire = Tire::find($id);

		return view('cart', compact('tire'));
	}

	public function agri()
	{
		$tires = Tire::all();

		return view('agri', compact('tires'));
	}
	

}
