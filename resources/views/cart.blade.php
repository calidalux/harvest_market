@extends('main')

@section('content')

<div class="container-fluid">
	<div class="col-xs-12 col-lg-9 padding-top-76">
		<div class="bread">
			<ul>
				<li><a href="/">Главная</a> > </li>
				@if ($tire->class === 'Сельхоз шины') <li><a href="/?filterTireClass=Сельхоз+шины">Сельхоз шины</a>></li> @endif
				@if ($tire->class === 'Индустриальные шины') <li><a href="/?filterTireClass=Индустриальные+шины">Индустриальные шины</a>></li> @endif
				<li class="name_bread">  {{ $tire->size}} {{ $tire->brand}} {{ $tire->model}} </li>
			</ul>
		</div>
		<div class="cart-cart">

					@if ($tire->class === 'Сельхоз шины') <div class="header_cart header_orange"> @endif
					@if ($tire->class === 'Индустриальные шины') <div class="header_cart header_green"> @endif
					
				<span class="cart_title_size">{{ $tire->size}}</span> <br>
				<span class="cart_title_model">{{ $tire->model}}</span>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<div class="img_cart_cart">
						<img src="{{ asset($tire->img_big) }}">
					</div>
					<div class="price_cart">
						{{ number_format($tire->price, 0, ',', ' ')  }} руб.
					</div>
					<div class="more_cart">
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
							<td>{{ $tire->type_arch }}</td>
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
							<td class="bold">К/БК:</td>
							<td>{{ $tire->tube }}</td>
						</tr>
					</table>
					<button href="#PRICE" class="callback_button" id="MAIN_BUTTON">Узнать цену с доставкой</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="mfp-hide">
		<div class="price_form" id="PRICE">
			<div class="header_price_form">
				Куда доставить?	
			</div>
			
			<form id="CALL_FORM">
			<div class="text_callback_form">
				<input type="hidden" name="tire" value="{{ $tire->size }} {{ $tire->brand }} {{ $tire->model }}">
				Мы посчитаем доставку транспортной кампанией в город 

				<input type="text" requried name="city" required placeholder="Введите ваш город"> <br> и Вам перезвоним на номер: <input type="text" requried name="phone" required placeholder="Введите ваш номер"> <br>
				 (через 10-15 минут)
				<br>
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<button align='center' type="submit"  class="callback_form_button">Отправить</button>
			</form>
		</div>
	</div>

</div>

@stop

@section('title')

<title>Шина {{ $tire->size }} {{ $tire->brand }} {{ $tire->model }} за {{ number_format($tire->price, 0, ',', ' ')  }} руб. | Харвест</title>
<meta name="description" content="Шина {{ $tire->size }} {{ $tire->brand }} {{ $tire->model }} за {{ number_format($tire->price, 0, ',', ' ')  }} руб. | Харвест">

@stop