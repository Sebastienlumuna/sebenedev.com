<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created_at = $this->faker->dateTimeBetween('-1 year', 'now');
        return [

            'name' => fake()->name,
            'content' => fake()->paragraph(),
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
