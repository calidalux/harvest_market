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


		</div>
	</div>
</div>

@stop