<?php

namespace Database\Factories;

use App\Models\Activite;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActiviteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_activite' => $this->faker->word(),
            'descriptif_activite' => $this->faker->paragraph(5,true),
            'temps_minutes' => $this->faker->randomElement([15,30,45,60,120]),
            'theme_id' => Theme::all()->random()->id,
        ];
    }
}
