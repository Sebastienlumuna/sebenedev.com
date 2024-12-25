<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = $this->faker->dateTimeBetween('-1 year', 'now');
        return [
            //
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(4),
            'depot' => 'https://github.com',
            'link' => 'https://laracasts.com',
            'user_id' => 1,
            'created_at' => $created,
            'updated_at' => $created,
        ];
    }
}
