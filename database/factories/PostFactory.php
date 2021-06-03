<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->randomElement([$this->faker->sentence(), null]),
            'content' => $this->faker->paragraphs(10, true),
            'cover' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['draft', 'published', 'scheduled']),
            'privacy' => $this->faker->randomElement(['private', 'public']),
            'view' => $this->faker->numberBetween(5, 1000),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
