<?php

namespace Database\Factories;

use App\Models\Enfant;
use App\Models\Examin;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExaminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Examin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_exam' => $this->faker->date('Y-m-d', 'now'),
            'user_id'   => User::all()->random()->id,
            'enfant_id' => Enfant::all()->random()->id,
            'appreciation_moniteur' => $this->faker->randomElement(['bien','trés bien', 'des progrés', 'a des progrés à faire'])
        ];
    }
}
