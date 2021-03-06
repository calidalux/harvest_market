@extends('main')

@section('content')

<div class="container-fluid">
	<div class="col-xs-12 col-lg-9 padding-top-76">
		<div class="bread">
			<ul>
				<li><a href="/">Главная</a> > </li>
				@if ($tire->class === 'Сельхоз шины') <li><a href="/?filterTireClass=Сельхоз+шины">Сельхоз шины</a>></li> @endif
				@if ($tire->class === 'Индустриальные шины') <li><a href="/?filterTireClass=Индустриальные+шины">Индустриальные шины</a>></li> @endif
				@if ($tire->class === 'Грузовые шины') <li><a href="/?filterTireClass=Грузовые+шины">Грузовые шины</a>></li> @endif
				<li class="name_bread">  {{ $tire->size}} {{ $tire->brand}} {{ $tire->model}} </li>
			</ul>
		</div>
		<div class="cart-cart itemscope itemtype="http://schema.org/Product"">

			<meta itemprop="brand" content="{{ $tire->brand }}">
			<meta itemprop="category" content="{{ $tire->class }}">
			<meta itemprop="name" content="{{ $tire->size }} {{ $tire->brand }} {{ $tire->model }}">
			<meta itemprop="description" content="Шина {{ $tire->size }} {{ $tire->brand }} {{ $tire->model }} с доставкой по РФ.">

			@if ($tire->class === 'Сельхоз шины') <div class="header_cart header_orange"> @endif
			@if ($tire->class === 'Индустриальные шины') <div class="header_cart header_green"> @endif
			@if ($tire->class === 'Грузовые шины') <div class="header_cart header_blue"> @endif

			<span class="cart_title_size">{{ $tire->size}}</span> <br>
			<span class="cart_title_model">{{ $tire->model}} @if ($tire->class === 'Грузовые шины') <span class="truck_type">{{ $tire->type_arch}}</span> @endif</span>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="img_cart_cart">
					<img itemprop="image" src="{{ asset($tire->img_big) }}" alt="{{ $tire->size}} {{ $tire->brand}} {{ $tire->model}}">
				</div>
				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
					<div class="price_cart">
						@if ($tire->price == 8) Цена по запросу @else
						{{ number_format($tire->price, 0, ',', ' ')  }} руб.
						@endif
					</div>
					<meta itemprop="price" content="{{ $tire->price }}">
					<meta itemprop="priceCurrency" content="RUB">
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
				Мы посчитаем доставку
				<select type="text" name="number">
					<option selected>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select> шт.
				транспортной кампанией в город 
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