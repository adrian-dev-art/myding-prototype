<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull(),
            'category_id' => $this->faker->randomDigitNotNull(),
            'place' => $this->faker->city(5),
            'image' => 'img-post.png',
            'slug' =>  $this->faker->word(),
            'title' =>  $this->faker->sentence(),
            'description' => $this->faker->paragraphs(2, true),
            'comment_id' => $this->faker->randomDigitNotNull(),
            'like' =>  $this->faker->randomDigitNotNull(),
        ];
    }
}
