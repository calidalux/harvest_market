@extends('main')

@section('content')

<div class="container-fluid padding-top-76">
<div class="col-xs-12">
	
	@if (Input::get('filterTireClass') === 'Сельхоз шины') <h1>Сельскохозяйственные шины</h1>
	@elseif (Input::get('filterTireClass') === 'Индустриальные шины') <h1>Индустриальные шины</h1>
	@elseif (Input::get('filterTireClass') === 'Грузовые шины') <h1>Грузовые шины</h1>
	@else <h1>Наш каталог</h1>
	@endif

</div>
	@foreach($tires as $tire)
	<div class="col-xs-3">
		<div class="cart" itemscope itemtype="http://schema.org/Product">

			<div class="header_cart">

			<span class="cart_title_size">{{ $tire->size}}</span> 
			<br>
			<span class="cart_title_model" itemprop="model">{{ $tire->model}} @if ($tire->class === 'Грузовые шины') <span class="truck_type">{{ $tire->type_arch}}</span> @endif</span>
		</div>
		<div class="img_cart">
			<a href="/catalog/{{ $tire->slug }}"><img itemprop="image" src="{{ asset($tire->img_big) }}" alt="{{ $tire->size}} {{ $tire->brand}} {{ $tire->model}}"></a>
		</div>
		<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<div class="price">
				@if ($tire->price == 8) Цена по запросу @else
				{{ number_format($tire->price, 0, ',', ' ')  }} руб.
				@endif
			</div>
			<meta itemprop="price" content="{{ $tire->price }}">
			<meta itemprop="priceCurrency" content="RUB">

		</div>
		<div class="more">
			<a itemprop="url" href="/catalog/{{ $tire->slug }}">Подробнее...</a>
		</div>
		<div class="icon">
			@if ($tire->class === 'Сельхоз шины')  <a href="/?filterTireClass=Cельхоз+шины"><img src="{{ asset("img/agri_icon.png") }}" alt="Сельхоз шина"></a> @endif
			@if ($tire->class === 'Индустриальные шины') <a href="/?filterTireClass=Индустриальные+шины"><img src="{{ asset("img/ind_icon.png") }}" alt="Индустриальная шина"></a> @endif
			@if ($tire->class === 'Грузовые шины') <a href="/?filterTireClass=Грузовые+шины"><img src="{{ asset("img/truck_icon.png") }}" alt="Грузовая шина"></a> @endif		
		</div>
		<meta itemprop="brand" content="{{ $tire->brand }}">
		<meta itemprop="category" content="{{ $tire->class }}">
		<meta itemprop="name" content="{{ $tire->size }} {{ $tire->brand }} {{ $tire->model }}">
		<meta itemprop="description" content="Шина {{ $tire->size }} {{ $tire->brand }} {{ $tire->model }} с доставкой по РФ.">
	</div>
</div>
@endforeach
</div>

@stop

@section('title')

<title>Харвест. Магазин больших шин.</title>
<meta name="description" content="Поставка грузовых, сельскохозяйственных и индустриальных шин по всей России">

@stop