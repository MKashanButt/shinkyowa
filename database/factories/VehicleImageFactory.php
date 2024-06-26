<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\VehicleImage;

class VehicleImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleImage::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'vehicle_id' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'thumbnail' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'image' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        ];
    }
}
