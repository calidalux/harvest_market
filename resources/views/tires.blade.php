@extends('main')

@section('content')
<div class="container">
	<div class="row">
		<h3>Сельхоз шины</h3>
	</div>
	<div class="row">
		@foreach ($tires as $tire)
		<div class="col-md-3">
			<ul>
				<li>
					{{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }} {{ $tire->brand }} {{ $tire->model }}
				</li>
				<li>Цена: {{ $tire->price }}</li>
			</ul>
		</div>
		@endforeach
	</div>
</div>
	
@stop