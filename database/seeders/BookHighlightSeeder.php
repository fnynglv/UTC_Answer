<?php

namespace Database\Seeders;

use App\Models\BookHighlight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class BookHighlightSeeder extends Seeder
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
            BookHighlight::create([
                'high_id' => mt_rand(1,5),
                'likes' => mt_rand(0,100),
                'comment' => $faker->sentence()
            ]);
        }
    }
}
