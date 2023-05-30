<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BookHighlight;
use App\Models\BookRead;
use App\Models\BookSeries;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            BookSeries::class,
            BookRead::class,
            BookHighlight::class
        ]);
    }
}
