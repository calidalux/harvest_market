@extends('main')

@section('content')

<div class="container-fluid padding-top-76">

@foreach($tires as $tire)
	<div class="col-xs-3">
		<div class="cart">

					@if ($tire->class === 'Сельхоз шины') <div class="header_cart header_orange"> @endif
					@if ($tire->class === 'Индустриальные шины') <div class="header_cart header_green"> @endif

					<span class="cart_title_size">{{ $tire->size}}</span> <br>
					<span class="cart_title_model">{{ $tire->model}}</span>
					</div>
					<div class="img_cart">
						<img src="{{ asset($tire->img_big) }}">
					</div>
					<div class="price">
						{{ number_format($tire->price, 0, ',', ' ')  }} руб.
					</div>
					<div class="more">
						<a href="/catalog/{{ $tire->slug }}">Подробнее...</a>
					</div>
					<div class="icon">
						@if ($tire->class === 'Сельхоз шины') <img src="{{ asset("img/agri_icon.png") }}"> @endif
						@if ($tire->class === 'Индустриальные шины') <img src="{{ asset("img/ind_icon.png") }}"> @endif
						
					</div>
		</div>
	</div>
@endforeach

@stop

@section('title')

<title>Харвест. Магазин больших шин.</title>
<meta name="description" content="Поставка грузовых, сельскохозяйственных и индустриальных шин по все России">

@stop