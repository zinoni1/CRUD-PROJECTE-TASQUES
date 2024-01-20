<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Projecte;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasca>
 */
class TascaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name,
            'slug' => $this->faker->text,
            'completada' => $this->faker->boolean,
            'descripcio' => $this->faker->text,
        ];
    }
}
