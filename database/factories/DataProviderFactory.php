<?php

namespace Database\Factories;

use App\Models\DataProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DataProvider>
 */
class DataProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'account_id' => $this->faker->randomNumber(900),
            'name' => $this->faker->company(),
            'buzz_key' => strtolower(str_replace(' ', '', $this->faker->company())),
        ];
    }
}
