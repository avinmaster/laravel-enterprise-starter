<?php

namespace Database\Factories;

use App\Models\App;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<App>
 */
class AppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'app_id' => $this->faker->randomElement(['stv', 'six']).'/'.$this->faker->uuid(),
            'app_name' => $this->faker->company(),
            'app_bundle' => $this->faker->randomElement(['com.stv', 'com.six']).'.'.$this->faker->randomElement(['app', 'game']),
            'inventory_source_id' => $this->faker->unique()->randomNumber(),
        ];
    }
}
