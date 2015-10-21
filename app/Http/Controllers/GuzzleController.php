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
            '12.5' => array(
                0.7, 2, 310
                ),
            '710' => array(
                0.1, 0.3, 56
                ),
            '630' => array(
                0.3, 0.1, 20
                ),
            );

        foreach ($towns as $town) {
            $count_sizes = 0;
            foreach ($sizes as $size) {
                $data[][$count_sizes] = $main_class->getCount(67083, $town['id'], date("Y-m-d"), $size[0], $size[1], $size[1], $size[0] * $size[1] * $size[1], $size[1], $size[2]);
                $count_sizes = $count_sizes + 1;
            }
        }
        
    var_dump($data);

     /*   Excel::create('DOCA', function($excel) use ($sizes) {

            $excel->sheet('list 1', function($sheet) use ($sizes) {


                $sheet->fromArray($sizes);        

            });

        })->export('xls'); */

    }

}
