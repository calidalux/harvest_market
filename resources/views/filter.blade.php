<div class="cart">
	<div class="top-filter-header">
		<h4>Поиск по каталогу:</h4>
	</div>

	<div class="filter-main">
		<form action="{{ URL::current() }}">
			<div class="row">
				<div class="col-xs-5 option-title">
					Тип шины:
				</div>
				<input type="text" id="filterTire" name="filterTireSize" value="{{Input::get('filterTireSize')}}">
			</div>
			<button>OK</button>
		</form>
	</div>
</div>