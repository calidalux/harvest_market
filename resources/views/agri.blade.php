@extends('main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="bread">
				<a href="#">Магазин</a><span class="spliter">></span>
				Сельхоз шины
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			@include('filter')
		</div>
		<div class="col-md-8">

			@foreach ($tires as $tire)
			
			<div class="row tireCart">
				<div class="col-md-3">
					<img src="{{ asset($tire->img) }}">
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="com-md-12">
							<div class="row">
								<div class="col-md-7 tireName">
									{{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }} {{ $tire->model }}
								</div>
								<div class="col-md-5 price_main">
									{{ number_format($tire->price, 0, ',', ' ')  }} руб.
								</div>
							</div>
							<div class="row">
								<div class="col-md-7 tire_type">
									{{ $tire->type }}
								</div>
								<div class="col-md-5 update_time">
									Обновлено: {{ date('d. m. y', strtotime($tire->updated_at)) }}г.
								</div>
							</div>
							<div class="row">
								<div class="col-md-7 more_link">
									 <a href="/agri/{{ $tire->id }}">Подбробнее о шине</a>
								</div>
								<div class="col-md-5">
									<button class="cat_button">Купить по телефону</button>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			@endforeach

		</div>
	</div>
</div>

@stop