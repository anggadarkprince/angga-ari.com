<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'field' => $this->faker->words(2, true),
            'expertise' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(8),
            'proficiency_level' => $this->faker->numberBetween(1, 10),
        ];
    }
}
