<?php

namespace Database\Factories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Education::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'degree' => $this->faker->randomElement(Education::DEGREES),
            'institution' => $this->faker->words(3, true),
            'major' => $this->faker->words(3, true),
            'location' => $this->faker->city . ', ' . $this->faker->country,
            'enter' => $this->faker->date('Y'),
            'graduate' => $this->faker->randomElement([null, $this->faker->date('Y')]),
        ];
    }
}
