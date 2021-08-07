<?php

namespace Database\Factories;

use App\Models\Examin;
use App\Models\ExaminQuestionMoniteur;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExaminQuestionMoniteurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExaminQuestionMoniteur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['acquis','en_cours','non_acquis','non_evalue']);
        return [
            'examin_id'     => Examin::all()->random()->id,
            'question_id'   => Question::all()->random()->id,
            $status => true,
        ];
    }
}
