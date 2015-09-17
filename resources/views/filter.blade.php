<div class="cart">
	<div class="top-filter-header">
		<h4>Поиск по каталогу:</h4>
	</div>
</div>
<div class="filter-main">
	<form action="{{ URL::current() }}">
		<div class="row">
			<div class="col-xs-5 option-title">
				Тип шины:
			</div>
			<div class="col-xs-7 filter-option">
				<ul>
					<li><input type="radio" name="tireType" value="radial" {{ (Input::get('tireType') != 'bias') ? 'checked' : '' }}>Радиальная</li>
					<li><input type="radio" name="tireType" value="bias" {{ (Input::get('tireType') == 'bias') ? 'checked' : '' }}>Диагональная</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5 option-title">
				Типоразмер:
			</div>
			<div class="col-xs-7 filter-option">
				<input name="filterTireWidth" type="text" value="{{Input::get('filterTireWidth')}}" placeholder="710"> / <input name="filterTireHeight" type="text" placeholder="70" value="{{Input::get('filterTireHeight')}}"> R <input type="text" name="filterTireRim" value="{{Input::get('filterTireRim')}}" placeholder="42">
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
		</div>
		<button>OK</button>
	</form>
</div>
