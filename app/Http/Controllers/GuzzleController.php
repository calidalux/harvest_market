<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\pecAPI\myPEC;
use App\Lib\pecAPI\pecomIdTownFinder;
use Excel;


class GuzzleController extends Controller
{
    public function index()
    {   
        $towns_class = new pecomIdTownFinder;       
        $main_class = new myPEC;

        $towns = $towns_class->findTown();
        $sizes = array(
            '12.5L-15' => array(
                0.312, 0.815, 21
                ),
            '14.9-24' => array(
                0.386, 1.265, 58
                ),
            '420/90R30' => array(
                0.439, 1.486, 133
                ),
            '600/70R30' => array(
                0.61, 1.595, 214
                ),
            '650/75R32' => array(
                0.65, 1.791, 278
                ),
            '520/85R42' => array(
                0.538, 1.935, 225
                ),
            '710/70R42' => array(
                0.724, 2.055, 351
                ),
            );

        $count_towns = 0;

        foreach ($towns as $town) {
            $count_sizes = 0;
            foreach ($sizes as $size) {
                $data[$town['Город']][$count_sizes] = $main_class->getCount(67083, $town['id'], date("Y-m-d"), $size[0], $size[1], $size[1], $size[0] * $size[1] * $size[1], $size[1], $size[2]);
                $count_sizes = $count_sizes + 1;
            }
            $count_towns = $count_towns + 1;
        }
        
   // var_dump($data);

        Excel::create('DOCA', function($excel) use ($data) {

            $excel->sheet('list 1', function($sheet) use ($data) {


                $sheet->fromArray($data);        

            });

        })->export('xls');

    }

}
