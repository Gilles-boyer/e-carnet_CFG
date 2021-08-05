<?php

namespace Database\Factories;

use App\Models\Exam;
use App\Models\Activitie;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivitieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activitie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question' => $this->faker->sentence(6, true),
            'exam_id'  => Exam::all()->random()->id,
        ];
    }
}
