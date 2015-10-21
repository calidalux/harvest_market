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
        $towns = [
            'Тамбов',
            'Нижний Новгород',
            'Оренбург',
            'Пенза',
            'Уфа',
            'Саранск',
            'Казань',
            'Самара',
            'Саратов',
            'Ульяновск',
            'Чебоксары',
            'Волгоград',
            'Барнаул',
            'Новосибирск',
            'Омск',
            'Горно-Алтайск',
            'Абакан'
        ];
        foreach ($towns as $town) {
            $result = $data->call('branches', 'findbytitle', array('title' => $town)); //Получаем информацию по названию города
            $response = json_decode($result);
            if (isset($response->items[0]->cityId)) {
               $out[][$town] = $response->items[0]->cityId;
            } else
            {
                $out[][$town] = $response->items[0]->branchId;
            }
            
        }
        var_dump($out);
        return "Done!";
        //return $response->items[0]->cityId;  

         //$result = $data->call('branches', 'findbytitle', array('title' => 'Саратов')); //Получаем информацию по названию города
         //return $result;
    }

    public function index()
    {          
        $main = new myPEC;
        $data = $main->getCount(67083, 502, "2015-10-22", 1, 1, 1, 1, 1, 1);

        return $data;
        
    }
    
}
