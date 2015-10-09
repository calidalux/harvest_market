@extends('main')

@section('content')

<div class="container-fluid padding-top-76">
@foreach($tires as $tire)
	<div class="col-xs-3">
		<div class="cart">

					@if ($tire->class === 'Сельхоз шины') <div class="header_cart header_orange"> @endif
					@if ($tire->class === 'Индустриальные шины') <div class="header_cart header_green"> @endif
					@if ($tire->class === 'Грузовые шины') <div class="header_cart header_blue"> @endif

					<span class="cart_title_size">{{ $tire->size}}</span> 
					 <br>
					<span class="cart_title_model">{{ $tire->model}} @if ($tire->class === 'Грузовые шины') <span class="truck_type">{{ $tire->type_arch}}</span> @endif</span>
					</div>
					<div class="img_cart">
						<a href="/catalog/{{ $tire->slug }}"><img src="{{ asset($tire->img_big) }}" alt="{{ $tire->size}} {{ $tire->brand}} {{ $tire->model}}"></a>
					</div>
					<div class="price">
						{{ number_format($tire->price, 0, ',', ' ')  }} руб.
					</div>
					<div class="more">
						<a href="/catalog/{{ $tire->slug }}">Подробнее...</a>
					</div>
					<div class="icon">
						@if ($tire->class === 'Сельхоз шины') <img src="{{ asset("img/agri_icon.png") }}" alt="Сельхоз шина"> @endif
						@if ($tire->class === 'Индустриальные шины') <img src="{{ asset("img/ind_icon.png") }}" alt="Индустриальная шина"> @endif
						@if ($tire->class === 'Грузовые шины') <img src="{{ asset("img/truck_icon.png") }}" alt="Грузовая шина"> @endif
						
					</div>
		</div>
	</div>
@endforeach

@stop

@section('title')

<title>Харвест. Магазин больших шин.</title>
<meta name="description" content="Поставка грузовых, сельскохозяйственных и индустриальных шин по всей России">

@stop