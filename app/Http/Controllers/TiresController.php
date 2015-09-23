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

			$filter_tire_class = Input::has('filterTireClass') ? Input::get('filterTireClass') : null;
			$filter_tire_size = Input::has('filterTireSize') ? Input::get('filterTireSize') : null;
			$filter_tire_brand = Input::has('filterTireBrand') ? Input::get('filterTireBrand') : null;

			if (isset($filter_tire_class) && ($filter_tire_brand != 'любой')) {
				$query->where('class', $filter_tire_class);
			}

			if (isset($filter_tire_size)) {
				$query->where('size', $filter_tire_size);
			}
			if (isset($filter_tire_brand) && ($filter_tire_brand != 'любой')) {
				$query->where('brand', $filter_tire_brand);
			}

		})->get();

		

		return view('catalog', compact('tires'));
	}

	public function cart($id)
	{
		$tire = Tire::find($id);
		return view('cart', compact('tire'));
	}
	

}
