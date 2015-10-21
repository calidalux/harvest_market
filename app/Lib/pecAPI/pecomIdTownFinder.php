<?php

namespace App\Lib\pecAPI;
use App\Lib\pecAPI\PecomKabinet;

class pecomIdTownFinder
{
	 public function findTown()
    {
        $data = new PecomKabinet('harvestltd', '5A473F678485B056318A0E4B9E1E2FD42ECCC3D0');
        $towns = array(
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
        );
        $count = 0;
        foreach ($towns as $town)
        {

            $result = $data->call('branches', 'findbytitle', array('title' => $town)); //Получаем информацию по названию города
            
            $response = json_decode($result);

            if (isset($response->items[0]->cityId)) {
		          $out[$count]['Город'] = $town;
		          $out[$count]['id'] = $response->items[0]->cityId;
		        }

		        else
         		{
	            $out[$count]['Город'] = $town;
	            $out[$count]['id'] = $response->items[0]->branchId;
       			}

            $count = $count + 1;
        }

        $data->close();
        return $out;
     }
}