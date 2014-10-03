<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BuildingsTableSeeder extends Seeder {

	public function run()
	{
		$buildings = array(
			'อาคาร ก้าวหน้า',
			'อาคาร ขุมทรัพย์',
			'อาคาร งอกงาม',
			'อาคาร จงเจริญ',
			'อาคาร ฉลองชัย',
			'อาคาร ชัยชนะ',
			'อาคาร ดวงดี',
			'อาคาร ทองแท้'
			);

		$sort_order = 1;
		foreach ($buildings as $value) {
			$building = Building::create([
							'floor' => 8,
							'sort_order' => $sort_order
						]);

			$description = array(
			'1' => array(
				'name' => $value
				),
			'2' => array(
				'name' => $value
				)
			);

			$building->languages()->sync($description);

			for ($i=1; $i <= 8 ; $i++) { 
				BuildingFloor::create([
					'building_id' => $building->id,
					'no' => $i,
					'image' => 'http://lorempixel.com/693/393/business/'
					]);
			}
			$sort_order++;
		}

		
	
	}

}