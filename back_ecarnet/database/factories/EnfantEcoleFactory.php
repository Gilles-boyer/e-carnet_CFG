<?php

namespace Database\Factories;

use App\Models\Ecole;
use App\Models\Enfant;
use App\Models\EnfantEcole;
use App\Models\Responsable;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnfantEcoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EnfantEcole::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ecole_id' => Ecole::all()->random()->id,
            'enfant_id' => Enfant::all()->random()->id,
            'présent' => true
        ];
    }
}
