<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Brand;
use Faker\Factory as Faker;

class BrandsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('brands')->delete();

		$faker = Faker::create();

		foreach(range(1, 25) as $index)
		{
			$brand = Brand::create([
				'name' => $faker->company,
				
			]);
		}
	}

}