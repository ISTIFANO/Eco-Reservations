<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salle>
 */
class SalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->realText(),
            'location' => $this->faker->realText(),
            'number' => $this->faker->randomNumber(),
            'start_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['panding' ,'rejected', 'accepted']),
            'updated_at' => $this->faker->date(),
            'created_at' => $this->faker->date(),

        ];
    }
}
