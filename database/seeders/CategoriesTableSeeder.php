<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
   
    public function run(): void
    {
          $faker = Faker::create();
          $randomCaterory = ['aventura', 'accion', 'misterio', 'romance', 'terror'];
          $fechaAleatoria = Carbon::createFromTimestamp(rand(1, time()));

          for ($i = 1; $i <= 10; $i++) {
            DB::table('categories')->insert([
                'name' => $faker->randomElement($randomCaterory),
                'created_at' => $fechaAleatoria,
                'updated_at' => $fechaAleatoria,
            ]);


    }
}
}