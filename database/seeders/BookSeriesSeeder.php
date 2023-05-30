<?php

namespace Database\Seeders;

use App\Models\BookSeries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class BookSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=0; $i<5; $i++){
            BookSeries::create([
                'category_id' => mt_rand(1,5),
                'title' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'author' => $faker->name(),
                'longtext' => mt_rand(250,1999),
                'date' => $faker->date()
            ]);
        }
    }
}
