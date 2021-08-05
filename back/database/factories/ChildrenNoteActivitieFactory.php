<?php

namespace Database\Factories;

use App\Models\Activitie;
use App\Models\Children;
use App\Models\Grade;
use App\Models\ChildrenNoteActivitie;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChildrenNoteActivitieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChildrenNoteActivitie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grade_id' => Grade::all()->random()->id,
            'children_id'=> Children::all()->random()->id,
            'activitie_id'=> Activitie::all()->random()->id,
            'comment' => $this->faker->sentence(6, true),
            'date' => now(),
        ];
    }
}
