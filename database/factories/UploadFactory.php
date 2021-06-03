<?php

namespace Database\Factories;

use App\Models\Upload;
use Illuminate\Database\Eloquent\Factories\Factory;

class UploadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Upload::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'file' => $this->faker->imageUrl(),
            'size' => $this->faker->numberBetween(10000, 300000),
            'mime' => $this->faker->mimeType,
            'caption' => $this->faker->words(3, true),
        ];
    }
}
