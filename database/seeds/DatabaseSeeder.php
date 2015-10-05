<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('tiresSeeds');
		$this->call('Typeahead');
	}

}

class tiresSeeds extends Seeder{
	public function run()
	{
		DB::table('tires')->insert([
			[
			'model' 		=> 'AG49M',
			'descript' 	=> 'Шина на трактор',
			'width' 	=> '710',
			'height' 	=> '70',
			'rim' 		=> '42',
			'r_type' 	=> 'R-1',
			'brand'		=> 'Titan',
			'country'	=> 'США',
			'inStock'	=> 0,
			'tech'		=> '179A8/B',
			'type'		=> 'Сельхоз шина',
			'price'		=> 143970,
			'size'		=> '710/70R42'

			],

			[
			'model' 		=> 'Maxi Traction',
			'descript' 	=> 'Шина на трактор',
			'width' 	=> '710',
			'height' 	=> '70',
			'rim' 		=> '42',
			'r_type' 	=> 'R-1',
			'brand'		=> 'Firestone',
			'country'	=> 'Испания',
			'inStock'	=> '2',
			'tech'		=> '173D',
			'type'		=> 'Сельхоз шина',
			'price'		=> 156200,
			'size'		=> '710/70R42'

			],
			[
			'model' 		=> 'HI FLOTATION L-1',
			'descript' 	=> 'На прицепную технику',
			'width' 	=> '11L',
			'height' 	=> '',
			'rim' 		=> '15SL',
			'r_type' 	=> 'L-1',
			'brand'		=> 'Titan',
			'country'	=> 'США',
			'inStock'	=> '10',
			'tech'		=> '12 PLY',
			'type'		=> 'Сельхоз шина',
			'price'		=> 9990,
			'size'		=> '11L-15SL'

			],
			[
			'model' 		=> 'Performer 70',
			'descript' 	=> 'На трактор',
			'width' 	=> '480',
			'height' 	=> '70',
			'rim' 		=> '30',
			'r_type' 	=> 'R-1',
			'brand'		=> 'Firestone',
			'country'	=> 'Бразилия',
			'inStock'	=> '0',
			'tech'		=> '145D',
			'type'		=> 'Сельхоз шина',
			'price'		=> 53990,
			'size'		=> '480/70R30'

			]

			]

			);
}
}

class Typeahead extends Seeder{
	public function run()
	{
		DB::table('typeaheads')->insert([

			[
			'width' 	=> '710',
			'height' 	=> '70',
			'rim' 		=> '42',
			'size'		=> '710/70R42'
			],
			[
			'width' 	=> '11L',
			'height' 	=> '',
			'rim' 		=> '15SL',
			'size'		=> '11L-15SL'
			],
			[
			'width' 	=> '480',
			'height' 	=> '70',
			'rim' 		=> '30',
			'size'		=> '480/70R30'
			]
			]

			);
}
}