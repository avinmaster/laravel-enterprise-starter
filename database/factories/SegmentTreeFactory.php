<?php

namespace Database\Factories;

use App\Models\SegmentTree;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SegmentTree>
 */
class SegmentTreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cpm' => $this->faker->randomFloat(),
            'type' => $this->faker->randomElement(['category', 'segment']),
            'key' => $this->faker->randomElement(['grapeshot', 'liveramp']).'-'.$this->faker->numerify('#####'),
            'name' => $this->faker->company(),
            'parent_key' => 'webbulla-'.$this->faker->numerify('#####'),
            'alternative_id' => $this->faker->numerify('##########'),
            'verb_usage' => $this->faker->randomElement(['ALL', null]),
        ];
    }
}
