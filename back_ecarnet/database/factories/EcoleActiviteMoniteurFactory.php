<?php

namespace Database\Factories;

use App\Models\Activite;
use App\Models\Ecole;
use App\Models\EcoleActiviteMoniteur;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EcoleActiviteMoniteurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EcoleActiviteMoniteur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ecole_id' => Ecole::all()->random()->id,
            'activite_id'=>Activite::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
