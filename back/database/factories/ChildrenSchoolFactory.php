<?php

namespace Database\Factories;

use App\Models\Children;
use App\Models\ChildrenSchool;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChildrenSchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChildrenSchool::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'children_id' => Children::all()->random()->id,
            'School_id'   => School::all()->random()->id,
            'date_school' => $this->faker->date('Y-m-d', $max = 'now'),
            'here' => true,
        ];
    }
}
