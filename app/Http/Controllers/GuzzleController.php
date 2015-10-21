<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\pecAPI\myPEC;
use App\Lib\pecAPI\PecomKabinet;

class GuzzleController extends Controller
{

    public function findTown()
    {
        $data = new PecomKabinet('harvestltd', '5A473F678485B056318A0E4B9E1E2FD42ECCC3D0');
        $result = $data->call('branches', 'findbytitle', array('title' => 'Абакан'));
        return $result;
    }

    public function index()
    {          
        $main = new myPEC;
        $data = $main->getCount(67083, 66729, "2015-10-22", 1, 1, 1, 1, 1, 1);

        return $data;
        
    }
    
}
