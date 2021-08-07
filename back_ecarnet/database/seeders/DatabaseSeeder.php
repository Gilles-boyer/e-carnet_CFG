<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Ecole::factory(10)->create();
        \App\Models\Niveau::factory(5)->create();
        \App\Models\Question::factory(30)->create();
        \App\Models\Responsable::factory(10)->create();
        \App\Models\Theme::factory(5)->create();
        \App\Models\Enfant::factory(20)->create();
        \App\Models\Examin::factory(10)->create();
        \App\Models\Activite::factory(20)->create();
        \App\Models\EcoleActiviteMoniteur::factory(20)->create();
        \App\Models\EnfantEcole::factory(20)->create();
        \App\Models\ExaminQuestionMoniteur::factory(10)->create();
    }
}
