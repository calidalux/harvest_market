@extends('main')

@section('content')

<div class="padding-top-76">
	<h1>AllO</h1>
	<h2>
		@foreach ($test as $key) {{ $slug }} @endforeach
	</h2>
</div>

@stop