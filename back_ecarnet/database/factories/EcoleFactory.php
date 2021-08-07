<?php

namespace Database\Factories;

use App\Models\Ecole;
use Illuminate\Database\Eloquent\Factories\Factory;

class EcoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ecole::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_school' => "EFK ".$this->faker->monthName()." ".$this->faker->year(),
            'date_ecole'  => $this->faker->date('Y-m-d', 'now')
        ];
    }
}
