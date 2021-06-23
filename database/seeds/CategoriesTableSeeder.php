<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allcategories = [
			$category1 = [
				'name' => '審判',
			],
			$category2 = [
				'name' => '仕事',
			],
			$category3 = [
				'name' => '雑学',
			],
			
		];

		foreach ($allcategories as $category) {
			DB::table('categories')->insert($category);
		}
    }
}
