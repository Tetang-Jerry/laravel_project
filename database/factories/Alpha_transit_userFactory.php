<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Alpha_transit_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake('name')->word(),
            'prenom' => fake('prenom')->word(),
            'username' => fake('username')->unique()->word(),
            'email' => fake('email')->unique()->email(),
            'password' => fake('password')->unique()->password(),
            'code'=> fake()->unique()->numberBetween(),
            'numero'=> fake('numero')->unique()->numberBetween(  ),
            'numcompte'=> fake()->unique()->numberBetween(  ),
            'token'=> fake()->unique()->numberBetween(  ),

        ];
    }
}
