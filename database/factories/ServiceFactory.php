<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'image' => fake()->randomElement(['fa-user', 'fa-car', 'fa-home', 'fa-star', 'fa-heart', 'fa-camera','fa-cog','fa-phone','fa-flag','fa-suitcase','fa-map-marker']),
            'description' => fake()->text(),
            'state' => '1',
            'register_user' =>\App\Models\User::factory(),
        ];
    }
}
