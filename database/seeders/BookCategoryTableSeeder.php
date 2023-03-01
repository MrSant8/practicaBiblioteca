<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class BookCategoryTableSeeder extends Seeder
{
  
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) 
        {
            $category_id = rand(1, 10);
            DB::table('books')->insert(
                [
                    'isbn' => $faker->unique()->isbn13,
                    'author' => $faker->name(),
                    'description' => $faker->paragraph,
                    'publish_date' => $faker->date(),
                    'price' => $faker->randomFloat(2, 1, 100)
                ]
        );
        }
        
    }
}
