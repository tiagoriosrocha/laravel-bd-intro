<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AtividadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->paragraph(2),
            'scheduledto' => $this->faker->dateTimeBetween('+1 week','+1 year')
        ];
    }
}
