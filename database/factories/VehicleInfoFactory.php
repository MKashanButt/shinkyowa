<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Vehicle;
use App\Models\VehicleInfo;

class VehicleInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleInfo::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'mileage' => $this->faker->numberBetween(-10000, 10000),
            'engine' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'doors' => $this->faker->word(),
            'transmission' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'type' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'fuel' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'extras' => $this->faker->text(),
            'buy_link' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'timestamp' => $this->faker->dateTime(),
            'vehicle_id' => Vehicle::factory(),
        ];
    }
}
