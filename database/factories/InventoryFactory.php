<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'site_id' => $this->faker->randomElement(['shr', 'rp/xapi:']).'/'.$this->faker->uuid(),
            'site_name' => $this->faker->company(),
            'placement_id' => $this->faker->randomElement(['stv', 'six', 'rp']).'/'.$this->faker->uuid(),
            'inventory_source_id' => $this->faker->unique()->randomNumber(),
            'volume_ranking' => $this->faker->unique()->randomNumber(),
        ];
    }
}
