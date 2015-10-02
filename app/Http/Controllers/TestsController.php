<?php namespace App\Http\Controllers;

use App\Tire;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Collection;

class TestsController extends Controller {

	public function index()
	{
		
		$tires = Tire::all();

		foreach ($tires as $tire) {
			$tire->slug = Str::slug( $tire->size . ' ' . $tire->brand . ' ' . $tire->model );
			$tire->save();
		}

		return 'ЧПУ обновлены';
	}

	public function update()
	{
		
		$tires = Tire::where();

		

		return 'ЧПУ обновлены';
	}


}
