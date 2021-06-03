<?php

namespace Database\Factories;

use App\Models\Award;
use Illuminate\Database\Eloquent\Factories\Factory;

class AwardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Award::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'category' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(3),
            'location' => $this->faker->city . ', ' . $this->faker->country,
            'awarded_in' => $this->faker->date('Y'),
        ];
    }
}
