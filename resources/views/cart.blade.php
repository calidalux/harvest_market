@extends('main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="bread">
				<a href="/">Магазин</a><span class="spliter">></span>
				<a href="/catalog?filterTireClass=Сельхоз+шины">Сельхоз шины</a><span class="spliter">></span> 
				{{ $tire->size }} {{ $tire->model }}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			@include('filter')
		</div>
		<div class="col-md-8 cart">
			<div class="row">
				<div class="col-md-12 top-filter-header">
					<h4> Шина {{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }} {{ $tire->brand }} {{ $tire->model }}</h4>
				</div>
			</div>
			<div class="row padding15">
				<div class="col-md-4 padding15">
					<img src="{{ asset($tire->img_big) }}">
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12 price_cart">
							Цена: {{ number_format($tire->price, 0, ',', ' ')  }} руб.
						</div>
					</div>
					<div class="row margin-top-10">
						<div class="col-md-12">
							<button class="cat_button">Заказать по телефону</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 margin-top-10 ">
							@if ($tire->inStock != 0 ) В наличии: {{ $tire->inStock }} шт. @else На заказ (10-14 дней) @endif
						</div>
					</div>
			</div>
		</div>
		<div class="row padding15">
						<div class="col-md-6">
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
						<div class="col-md-6">
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
						</div>
					</div>
				</div>
	</div>
</div>

@stop