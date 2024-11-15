<?php

namespace Database\Factories;

use App\Models\Bandwidth;
use Illuminate\Database\Eloquent\Factories\Factory;

class BandwidthFactory extends Factory
{
    protected $model = Bandwidth::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
