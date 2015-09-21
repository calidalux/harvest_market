@extends('main')

@section('content')

<div class="container">
	<nav class="menu">
		<a href="#">Главная</a>
		<a href="#">Грузовые шины</a>
		<a href="#">Сельхоз шины</a>
		<a href="#">Мобильный шиномонтаж</a>
		<a href="#">Контакты</a>
	</nav>
	<div class="row">
		<div class="col-md-4">
			@include('filter')
		</div>
		<div class="col-md-8">
			@include('main_banner')
		</div>
	</div>
</div>

@include('hits')

@stop