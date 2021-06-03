<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShowcaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'field' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'tagline' => $this->faker->sentence(2),
            'description' => $this->faker->paragraphs(10, true),
            'cover' => $this->faker->imageUrl(),
            'company' => $this->faker->company,
            'team' => $this->faker->words(3, true),
            'url' => $this->faker->url,
            'year' => $this->faker->date('Y'),
            'month' => $this->faker->date('m'),
            'privacy' => $this->faker->randomElement(['private', 'public']),
        ];
    }
}
