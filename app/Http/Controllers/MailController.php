<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MailController extends Controller {

	public function callback()
	{
		$frm_name  = "LEAD";
		$recepient = "info@harvestltd.ru";
		$sitename  = "Основной сайт";
		$subject   = "Новая заявка с сайта \"$sitename\"";


		$tire_cb = trim($_POST["tire"]);
		$city_cb = trim($_POST["city"]);
		$phone_cb = trim($_POST["phone"]);

		$message = "
		Шина: $tire_cb
		Город: $city_cb
		Телефон: $phone_cb 
		";

		mail($recepient, $subject, $message, "From: $frm_name <$recepient>" . "\r\n" . "Reply-To: $recepient" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");

		return 'mail send';
	}

}
