@extends('main')

@section('content')

<div class="container-fluid">
	<div class="col-xs-7 padding-top-76">
		<div class="cart">
			<div class="header_cart">
				<span class="cart_title_size">{{ $tire->size}}</span> <br>
				<span class="cart_title_model">{{ $tire->model}}</span>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<div class="img_cart">
						<img src="{{ asset($tire->img_big) }}">
					</div>
					<div class="price">
						{{ number_format($tire->price, 0, ',', ' ')  }} руб.
					</div>
					<div class="more">
						Наличие уточняйте по телефону
					</div>
				</div>
				<div class="col-xs-6">
					<table class="tech">
						<tr>
							<td class="bold">Назначение:</td>
							<td>{{ $tire->class }}</td>
						</tr>
						<tr>
							<td class="bold">Тип:</td>
							<td> </td>
						</tr>
						<tr>
							<td class="bold">ИН/CC, слои:</td>
							<td>{{ $tire->tech }}</td>
						</tr>
						<tr>
							<td class="bold">Страна:</td>
							<td>{{ $tire->country }}</td>
						</tr>
						<tr>
							<td class="bold">Рисунок:</td>
							<td>{{ $tire->r_type }}</td>
						</tr>
					</table>
					<button href="#PRICE" class="callback_button" id="MAIN_BUTTON">Заказ по телефону</button>
				</div>
			</div>

		</div>
	</div>

</div>

<div class="mfp-hide">
	<div class="price_form" id="PRICE">
		<div class="header_price_form">
			Заказать {{ $tire->size}} {{ $tire->model}}
		</div>
		<div class="text_callback_form">
			Для получения прайс-листа оставьте свой номер телефона.
			(скачивание начнётся автоматически)
		</div>
		<form id="CALL_FORM">
			<input type="text" requried name="phone_cb" placeholder="+7 (___) ___ - __ - __">
			<button type="submit" class="callback_form_button">Скачать прайс-лист</button>
		</form>
	</div>
</div>

@stop