<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$user = User::create([
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'email' => $faker->email,
				'password' => Hash::make('password'),
				'admin' => $faker->numberBetween(0, 1)
			]);
		}
	}

}