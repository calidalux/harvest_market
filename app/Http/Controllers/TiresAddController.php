<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use League\Csv\Reader;

class TiresAddController extends Controller {

	public function index()
	{
		$csv = Reader::createFromPath('/upload.csv');
		$csv->setOffset(1); //because we don't want to insert the header
		$nbInsert = $csv->each(function ($row) {
		DB::table('tires')->insert(
		array(
			'country' => $row[0],
			'brand' => $row[1],
			'width' => $row[4],
			'height' => $row[5],
			'rim' => $row[6],
			'tech' => $row[7],
			'size' => $row[9],
			'class' => $row[10],
			'model' => $row[11],
			'price' => $row[12]
			)
		);
	});
	return 'Done';
	}
}


