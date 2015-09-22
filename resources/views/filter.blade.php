<div class="cart margin-top-10">
	<div class="top-filter-header">
		<h4>Поиск по складу:</h4>
	</div>

	<div class="filter-main">
		<form action="/catalog">
			<div class="row">
				<div class="col-xs-5 option-title">
					Тип шины:
				</div>
				<div class="col-xs-7 filter-option">
					<select name="filterTireClass">
						<option {{ (Input::get('filterTireClass') == 'Грузовые шины') ? 'selected' : '' }}>Грузовые шины</option>
						<option {{ (Input::get('filterTireClass') == 'Сельхоз шины') ? 'selected' : '' }}>Сельхоз шины</option>
					</select>
				</div>
			</div>
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
					<div class="col-xs-12">
						<button class="filter-button">Найти шину</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>