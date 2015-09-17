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

			$filter_tire_width = Input::has('filterTireWidth') ? Input::get('filterTireWidth') : null;
			$filter_tire_height = Input::has('filterTireHeight') ? Input::get('filterTireHeight') : null;
			$filter_tire_rim = Input::has('filterTireRim') ? Input::get('filterTireRim') : null;
			$filter_tire_brand = Input::has('filterTireBrand') ? Input::get('filterTireBrand') : null;

			if (isset($filter_tire_width)) {
				$query->where('width', $filter_tire_width);
			}

			if (isset($filter_tire_height)) {
				$query->where('height', $filter_tire_height);
			}

			if (isset($filter_tire_rim)) {
				$query->where('rim', $filter_tire_rim);
			}

			if (isset($filter_tire_brand) && ($filter_tire_brand != 'любой')) {
				$query->where('brand', $filter_tire_brand);
			}

		})->get();

		

		return view('agri', compact('tires'));
	}
	

}
