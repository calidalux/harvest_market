@extends('main')

@section('content')

	<div class="col-xs-6 padding-top-76">
		<div class="cart">
					<div class="header_cart">
					<span class="cart_title_size">{{ $tire->size}}</span> <br>
					<span class="cart_title_model">{{ $tire->model}}</span>
					</div>
					<div class="img_cart_id">
						<img src="{{ asset($tire->img_big) }}">
					</div>
					<div class="price">
						{{ number_format($tire->price, 0, ',', ' ')  }} руб.
					</div>
					<div class="more">
						<a href="">Подробнее...</a>
					</div>
					<div class="icon">
						<img src="{{ asset("img/agri_icon.png") }}">
					</div>
		</div>
	</div>
							<table class="tech">
								<tr>
									<td class="bold">Тип шины:</td>
									<td>{{ $tire->type }}</td>
								</tr>
								<tr>
									<td class="bold">Типоразмер:</td>
									<td>{{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }}</td>
								</tr>
								<tr>
									<td class="bold">Производитель:</td>
									<td>{{ $tire->brand }}</td>
								</tr>
							</table>
						</div>
						<div class="col-xs-5">
							<table class="tech">
								<tr>
									<td class="bold">Нагрузка:</td>
									<td>{{ $tire->tech }}</td>
								</tr>
								<tr>
									<td class="bold">Рисунок:</td>
									<td>{{ $tire->r_type }}</td>
								</tr>
								<tr>
									<td class="bold">Страна:</td>
									<td>{{ $tire->country }}</td>
								</tr>
							</table>
				

@stop