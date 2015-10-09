@extends('main')

@section('content')

<div class="container-fluid padding-top-76">
	@foreach($tires as $tire)
	<div class="col-xs-3">
		<div class="cart" itemscope itemtype="http://schema.org/Product">

			@if ($tire->class === 'Сельхоз шины') <div class="header_cart header_orange"> @endif
			@if ($tire->class === 'Индустриальные шины') <div class="header_cart header_green"> @endif
			@if ($tire->class === 'Грузовые шины') <div class="header_cart header_blue"> @endif

			<span class="cart_title_size">{{ $tire->size}}</span> 
			<br>
			<span class="cart_title_model" itemprop="model">{{ $tire->model}} @if ($tire->class === 'Грузовые шины') <span class="truck_type">{{ $tire->type_arch}}</span> @endif</span>
		</div>
		<div class="img_cart">
			<a href="/catalog/{{ $tire->slug }}"><img itemprop="image" src="{{ asset($tire->img_big) }}" alt="{{ $tire->size}} {{ $tire->brand}} {{ $tire->model}}"></a>
		</div>
		<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<div class="price">
				{{ number_format($tire->price, 0, ',', ' ')  }} руб.
			</div>
			<meta itemprop="price" content="{{ $tire->price }}">
			<meta itemprop="priceCurrency" content="RUB">

		</div>
		<div class="more">
			<a itemprop="url" href="/catalog/{{ $tire->slug }}">Подробнее...</a>
		</div>
		<div class="icon">
			@if ($tire->class === 'Сельхоз шины') <img src="{{ asset("img/agri_icon.png") }}" alt="Сельхоз шина"> @endif
			@if ($tire->class === 'Индустриальные шины') <img src="{{ asset("img/ind_icon.png") }}" alt="Индустриальная шина"> @endif
			@if ($tire->class === 'Грузовые шины') <img src="{{ asset("img/truck_icon.png") }}" alt="Грузовая шина"> @endif		
		</div>
		<meta itemprop="brand" content="{{ $tire->brand }}">
		<meta itemprop="category" content="{{ $tire->class }}">
		<meta itemprop="name" content="{{ $tire->size }} {{ $tire->brand }} {{ $tire->model }}">
	</div>
</div>
@endforeach
</div>

@stop

@section('title')

<title>Харвест. Магазин больших шин.</title>
<meta name="description" content="Поставка грузовых, сельскохозяйственных и индустриальных шин по всей России">

@stop