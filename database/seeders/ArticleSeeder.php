<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        require_once 'vendor/autoload.php';
        $faker = Faker::create();
        for ($i = 0; $i < 4; $i++) {
            $title = $faker->sentence(8);
            DB::table("articles")->insert([
                "category_id" => rand(1,7),
                "title" => $title,
                "image" =>$faker->imageUrl(640, 480, "cats", true),
                "content" => $faker->text(700),
                "slug" => str::slug($title),
                "created_at" => $faker->dateTime(),
                "updated_at" => now()
            ]);
        }
    }
}
