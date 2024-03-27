<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Vehicle;
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
            'url' => $this->faker->url(),
            'vehicle_id' => Vehicle::factory(),
        ];
    }
}
