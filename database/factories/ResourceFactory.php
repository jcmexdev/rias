<?php

namespace Database\Factories;

use App\Models\Regional;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'path' => $this->faker->imageUrl(),
            'format' => 'type',
            'regional_id' => Regional::factory()
        ];
    }
}
