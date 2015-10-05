<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Typeahead;

class AddTypeController extends Controller {

	public function index()
	{
		$data =
		array(
		'9.5L-14',
		'11L-14',
		'7.60-15',
		'9.5L-15',
		'10.00-15',
		'11L-15',
		'12.5L-15',
		'31Х13.5-15',
		'31x15.50-15NHS',
		'9.00-16SL',
		'16.5L-16.1',
		'21.5L-16.1SL',
		'340/80R18',
		'12.5/80-18',
		'7.50-20',
		'400/70 (16.0/70)-20',
		'11.2-24',
		'14.9-24',
		'16.9-24',
		'17.5L-24',
		'18.4-26',
		'700/50R26.5',
		'16.9-28',
		'600/65R28',
		'420/90R30',
		'480/70R30',
		'600/70R30',
		'24.5-32',
		'650/75R32',
		'30.5-32',
		'30.5L-32',
		'800/65R32',
		'900/60R32',
		'73X44-32',
		'460/85R34',
		'520/70R34',
		'320/85R38',
		'18.4-38',
		'480/70R38',
		'520/85R38',
		'650/85R38',
		'710/70R38',
		'800/70R38',
		'520/85R42',
		'620/70R42',
		'650/65R42',
		'710/70R42',
		'320/90R46',
		'380/90R46',
		'480/80R46',
		'380/90R50',
		'380/105R50',
		'320/90R54',
		);

		foreach ($data as $idata) {		
			$type   = new Typeahead;
			$type->size = $idata;
			$type->save();
		}
		return 'Done!';
	}

}
