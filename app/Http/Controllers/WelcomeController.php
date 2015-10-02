<?php namespace App\Http\Controllers;
use App\Tire;
use Input;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tires = Tire::where(function($query){

			$query->where('active', true);

			$filter_tire_class = Input::has('filterTireClass') ? Input::get('filterTireClass') : null;
			$filter_tire_size = Input::has('filterTireSize') ? Input::get('filterTireSize') : null;
			$filter_tire_brand = Input::has('filterTireBrand') ? Input::get('filterTireBrand') : null;

			if (isset($filter_tire_class)) {
				$query->where('class', $filter_tire_class);
			}

			if (isset($filter_tire_size)) {
				$filter_tire_size = str_replace(',', '.', $filter_tire_size);
				$query->where('size', 'LIKE', "%$filter_tire_size%");
			}
			if (isset($filter_tire_brand)) {
				$query->where('brand', $filter_tire_brand);
			}

		})->get();

		$tires = $tires->sortByDesc('updated_at');

		return view('global', compact('tires'));
	}

}
