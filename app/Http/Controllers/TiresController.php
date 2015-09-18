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

	public function agri()
	{
		$tires = Tire::where(function($query){

			$filter_tire_size = Input::has('filterTireSize') ? Input::get('filterTireSize') : null;

			if (isset($filter_tire_size)) {
				$query->where('size', $filter_tire_size);
			}

		})->get();

		

		return view('agri', compact('tires'));
	}
	

}
