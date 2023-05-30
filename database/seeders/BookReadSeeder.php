<?php

namespace Database\Seeders;

use App\Models\BookRead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class BookReadSeeder extends Seeder
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
            BookRead::create([
                'read_id' => mt_rand(1,5),
                'title' => $faker->sentence(),
                'lastestread' => $faker->date()
            ]);
        }
    }
}
