<div class="container hits-cont">
	<div class="row">
		<div class="col-xs-3">
			<h1>Лидеры продаж</h1>
		</div>
	</div>
	<div class="row">
		@foreach ($tires as $tire)

		<div class="col-xs-3">
			<div class="row">
				<div class="col-xs-12 more_link"><a href="">
					{{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }} {{ $tire->model }}</a>
				</div>
				<div class="col-xs-12 hits-cart-img">
					<img src="{{ asset($tire->img) }}">
				</div>
				<div class="col-xs-12">
					Цена: {{ number_format($tire->price, 0, ',', ' ')  }} руб.
				</div>
				<div class="col-xs-12 more_link">
					<a href="/agri/{{ $tire->id }}">Подбробнее...</a>
				</div>
			</div>
		</div>


		@endforeach
	</div>
</div>