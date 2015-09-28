@extends('main')

@section('content')

<div class="container-fluid">
	<div class="col-xs-12 padding-top-76">
		<div class="cart">

					@if ($tire->class === 'Сельхоз шины') <div class="header_cart header_orange"> @endif
					@if ($tire->class === 'Индустриальные шины') <div class="header_cart header_green"> @endif
					
				<span class="cart_title_size">{{ $tire->size}}</span> <br>
				<span class="cart_title_model">{{ $tire->model}}</span>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<div class="img_cart">
						<img src="{{ asset($tire->img_big) }}">
					</div>
					<div class="price_cart">
						{{ number_format($tire->price, 0, ',', ' ')  }} руб.
					</div>
					<div class="more_cart">
						Наличие уточняйте по телефону
					</div>
				</div>
				<div class="col-xs-6">
					<table class="tech">
						<tr>
							<td class="bold">Назначение:</td>
							<td>{{ $tire->class }}</td>
						</tr>
						<tr>
							<td class="bold">Тип:</td>
							<td> </td>
						</tr>
						<tr>
							<td class="bold">ИН/CC, слои:</td>
							<td>{{ $tire->tech }}</td>
						</tr>
						<tr>
							<td class="bold">Страна:</td>
							<td>{{ $tire->country }}</td>
						</tr>
						<tr>
							<td class="bold">Рисунок:</td>
							<td>{{ $tire->r_type }}</td>
						</tr>
					</table>
					<button href="#PRICE" class="callback_button" id="MAIN_BUTTON">Узнать цену с доставкой</button>
				</div>
			</div>
		</div>
	</div>

</div>

@stop