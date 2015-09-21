<div class="cart">
	<div class="top-filter-header">
		<h4>Поиск по каталогу шин:</h4>
	</div>

	<div class="filter-main">
		<form action="/agri">
			<div class="row">
				<div class="col-xs-5 option-title">
					Типоразмер:
				</div>
				<div class="col-xs-7 filter-option">
					<input type="text" id="filterTire" name="filterTireSize" value="{{Input::get('filterTireSize')}}" placeholder="710/70R42">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-5 option-title">
					Производитель:
				</div>
				<div class="col-xs-7 filter-option">
					<select name="filterTireBrand">
						<option {{ (Input::get('filterTireBrand') == 'любой') ? 'selected' : '' }}> любой</option>
						<option {{ (Input::get('filterTireBrand') == 'Firestone') ? 'selected' : '' }}>Firestone</option>
						<option {{ (Input::get('filterTireBrand') == 'Titan') ? 'selected' : '' }}>Titan</option>
						<option {{ (Input::get('filterTireBrand') == 'Treleborg') ? 'selected' : '' }}>Trelleborg</option>
					</select>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="filter-button">Найти шину</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>