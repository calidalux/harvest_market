<?php

namespace App\Lib\pecAPI;
use App\Lib\pecAPI\PecomKabinet;

class myPEC
{
	public function getCount($sender, $receiver, $date, $length, $width, $height, $volume, $maxSize, $weight)
    {   
        $sdk = new PecomKabinet('harvestltd', '5A473F678485B056318A0E4B9E1E2FD42ECCC3D0');
        // Вызов метода
        $result = $sdk->call('calculator', 'calculateprice', 
            array(

                "senderCityId" => $sender, // Код города отправителя [Number]
                "receiverCityId" => $receiver, // Код города получателя [Number]
                "isOpenCarSender" => false, // Растентовка отправителя [Boolean]
                "senderDistanceType" => 0, // Тип доп. услуг отправителя [Number]
                            // 0 - доп. услуги не нужны
                            // 1 - СК
                            // 2 - МОЖД
                            // 3 - ТТК
                "isDayByDay" => false, // Необходим забор день в день [Boolean]
                "isOpenCarReceiver" => false, // Растентовка получателя [Boolean]
                "receiverDistanceType" => 0, // Тип доп. услуг отправителя [Number]
                                          // кодируется аналогично senderDistanceType
                "isHyperMarket" => false, // признак гипермаркета [Boolean]
                "calcDate" => $date, // расчетная дата [Date]
                "isInsurance" => false, // Страхование [Boolean]
                "isInsurancePrice" => 0, // Оценочная стоимость, руб [Number]
                "isPickUp" => true, // Нужен забор [Boolean]
                "isDelivery" => false, // Нужна доставка [Boolean]
                "Cargos" => array( // Данные о грузах [Array]
                    array(
                           "length" => $length, // Длина груза, м [Number]
                           "width" => $width, // Ширина груза, м [Number]
                           "height" => $height, // Высота груза, м [Number]
                           "volume" => $volume, // Объем груза, м3 [Number]
                           "maxSize" => $maxSize, // Максимальный габарит, м [Number]
                           "isHP" => false, // Жесткая упаковка [Boolean]
                           "sealingPositionsCount" => 0, // Количество мест для пломбировки [Number]
                           "weight" => $weight, // Вес, кг [Number]
                           "overSize" => false // Негабаритный груз [Boolean]
                           )
                    )
                )
    );
    $sdk->close();
    return $result;
    }
}