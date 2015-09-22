@extends('main')

@section('content')

<div class="container">

	<div class="row">
		<div class="col-xs-7">
			@include('main_banner')
		</div>
		<div class="col-xs-5">
			@include('filter')
		</div>
	</div>
</div>

@include('hits')

@stop