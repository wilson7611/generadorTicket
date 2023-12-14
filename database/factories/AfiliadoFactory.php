<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Afiliado>
 */
class AfiliadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ci' => fake()->numberBetween(00000000,99999999),
            'nombre_completo' => fake()->name(),
            'codigo' => fake()->regexify('[A-Z]{3}-[0-9]{3}-[A-Z]{2}'),
            'telefono' => fake()->phoneNumber(),
            'email' => fake()->email(),
        ];
    }
}
