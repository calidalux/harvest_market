<div class="container footer">
	<div class="row">
		<div class="col-md-3">
			<h4>Лидеры продаж</h4>
		</div>
	</div>
	<div class="row">
			@foreach ($tires as $tire)

			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						{{ $tire->width }}@if ($tire->height != NULL )/{{ $tire->height }}R @else-@endif{{ $tire->rim }} {{ $tire->model }}
					</div>
					<div class="col-md-12">
						<img src="{{ asset($tire->img) }}">
					</div>
				</div>
			</div>


			@endforeach
	</div>
</div>