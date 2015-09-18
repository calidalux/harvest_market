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
				<div class="col-md-8 tireName">
							{{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }} {{ $tire->brand }} {{ $tire->model }}
				</div>
				<div class="col-md-4">
					{{ number_format($tire->price, 0, ',', ' ')  }} руб.
				</div>
			</div>
			@endforeach

		</div>
	</div>
</div>

@stop