@extends('main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="bread">
				<a href="#">Магазин</a><span class="spliter">></span>
				<a href="#">Сельхоз шины</a><span class="spliter">></span> 
				{{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }} {{ $tire->brand }} {{ $tire->model }}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			@include('filter')
		</div>
		<div class="col-md-8">
			<h1>{{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }} {{ $tire->brand }} {{ $tire->model }}</h1>

		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-3 cart">
			<div class="tire-img">
				<img src="{{ asset('img/710.jpg') }}" alt="">
			</div>
		</div>
	</div>
</div>
	
@stop