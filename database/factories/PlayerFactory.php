<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    protected $model = Player::class;

    public function definition(): array
    {
        $positions = ['Attaquant', 'Milieu', 'Défenseur', 'Gardien'];

        return [
            'name' => fake()->name(),
            'position' => fake()->randomElement($positions),
            'nationality' => fake()->country(),
            'birth_date' => fake()->date(),
            'matches_played' => fake()->numberBetween(0, 300),
            'goals_scored' => fake()->numberBetween(0, 150),
            'assists' => fake()->numberBetween(0, 100),
        ];
    }
}
