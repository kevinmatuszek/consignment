<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Item;
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('items')->delete();

		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			$item = Item::create([
				'user_id' => $faker->numberBetween(1, 10),
				'brand_id' => $faker->numberBetween(1, 25),
				'name' => $faker->word,
				'description' => $faker->sentence,
				'price' => $faker->randomFloat(2, 1, 1000)
			]);
		}
	}

}