<?php

namespace Database\Factories;

use App\Models\Timezone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Timezone>
 */
class TimezoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->timezone(),
        ];
    }
}
