<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'image' => "img_post.png",
            'place' => $this->$faker->city(),
            'caption' => $this->$faker->paragraph(2),
            'comment_id' => 1,
            'like' => $this->$faker->randomNumber(3),
            'created_at' => now(),
        ]);
    }
}
