<?php

namespace Database\Factories;

use App\Models\Toode;
use Illuminate\Database\Eloquent\Factories\Factory;

class ToodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Toode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->firstName,
            'description' => $this->faker->sentences(3,true),
            'price' => $this->faker->randomElement(['9,50€', '6,50€', '9,00€']),
        ];
    }
}
