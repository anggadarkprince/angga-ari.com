<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'experience' => $this->faker->words(3, true),
            'occupation' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(3),
            'location' => $this->faker->city . ', ' . $this->faker->country,
            'start' => $this->faker->date('Y'),
            'end' => $this->faker->randomElement([null, $this->faker->date('Y')]),
        ];
    }
}
