<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LanguagesTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Language::create([
		// 		'name' => $faker->name
		// 	]);
		// }
		Language::create(array('name' => 'ไทย'));
		Language::create(array('name' => 'Eng'));
	}

}