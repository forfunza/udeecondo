<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Project::create([

		// 	]);
		// }
		$project = Project::create(array('price' => '1000000'));
		$description = array(
			'1' => array(
				'name' => 'อยู่ดีคอนโด'
				),
			'2' => array(
				'name' => 'udeecondo'
				)
			);

		$project->languages()->sync($description);
	}

}