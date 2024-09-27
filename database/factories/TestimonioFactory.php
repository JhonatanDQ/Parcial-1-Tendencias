<?php

namespace Database\Factories;

use App\Models\Testimonio;
use App\Models\Service;
use App\Models\Ciudad;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonioFactory extends Factory
{
    protected $model = Testimonio::class;

    public function definition()
    {
        return [
            'service_id' => Service::inRandomOrder()->first()->id, // Selecciona un service aleatorio
            'ciudad_id' => Ciudad::inRandomOrder()->first()->id, // Selecciona una ciudad aleatoria
            'user_id' => User::inRandomOrder()->first()->id, // Selecciona un usuario aleatorio
            'message' => $this->faker->paragraph, // Genera un párrafo aleatorio
            'image' => fake()->imageUrl(60, 60, 'people'), // Genera una imagen aleatoria
            'status' => '1',
            'register_user' => $this->faker->name,
        ];
    }
}
