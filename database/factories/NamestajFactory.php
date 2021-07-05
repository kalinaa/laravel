<?php

namespace Database\Factories;

use App\Models\Namestaj;
use Illuminate\Database\Eloquent\Factories\Factory;

class NamestajFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Namestaj::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "naziv" => $this->faker->word,
            "tip_id"=>$this->faker->numberBetween($min = 1, $max = 10)
        ];
    }
}
