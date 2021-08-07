<?php

namespace Database\Factories;

use App\Models\Niveau;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question'  => $this->faker->sentence(6, true),
            'niveau_id' => Niveau::all()->random()->id,
        ];
    }
}
