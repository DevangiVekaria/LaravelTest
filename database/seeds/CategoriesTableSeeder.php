<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		 DB::table('categories')->delete();
		 /*DB::table('categories')->insert([
            'category_name' => str_random(30),
          
        ]);*/
		$faker = Faker\Factory::create();
        for ($i = 1; $i < 20; $i++) {
            DB::table('categories')->insert([
                'category_name' => 'Category'.$i ,//$faker->companies,
        
            ]);
        }
		
    }
}
