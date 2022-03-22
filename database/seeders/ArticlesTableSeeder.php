<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = \Faker\Factory::create();

        for ($d=0; $d < 50; $d++) { 
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
