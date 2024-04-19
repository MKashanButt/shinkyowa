<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Vehicle;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'stock_id' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'make' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'model' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'year' => $this->faker->numberBetween(-10000, 10000),
            'fob' => $this->faker->numberBetween(-10000, 10000),
            'currency' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'mileage' => $this->faker->numberBetween(-10000, 10000),
            'engine' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'doors' => $this->faker->word(),
            'transmission' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'type' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'fuel' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'category' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'extras' => $this->faker->text(),
            'buy_link' => $this->faker->regexify('[A-Za-z0-9]{200}'),
        ];
    }
}
