<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'contact' => $this->faker->phoneNumber,
            'website' => $this->faker->domainName,
            'comment' => $this->faker->paragraph(5),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'ip' => $this->faker->ipv4
        ];
    }
}
