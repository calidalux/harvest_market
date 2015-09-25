@extends('main')

@section('content')

<div class="container-fluid padding-top-76">

@foreach($tires as $tire)

	<div class="col-xs-3">
		<div class="cart">
					<div class="header_cart">
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
						<a href="/catalog/{{ $tire->id }}">Подробнее...</a>
					</div>
					<div class="icon">
						<img src="{{ asset("img/agri_icon.png") }}">
					</div>
		</div>
	</div>
@endforeach

@stop