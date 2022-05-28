<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->unique()->word(),
            'url' => $this->faker->unique()->url(),
            'price' => $this->faker->randomFloat(2),
            'description' => $this->faker->text()
        ];
    }
}
