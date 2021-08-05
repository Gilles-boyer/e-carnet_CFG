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
        \App\Models\Role::factory(3)->create();
        \App\Models\School::factory(3)->create();
        \App\Models\Grade::factory(3)->create();
        \App\Models\Exam::factory(5)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Children::factory(10)->create();
        \App\Models\ChildrenSchool::factory(10)->create();
        \App\Models\Activitie::factory(20)->create();
        \App\Models\ChildrenNoteActivitie::factory(10)->create();
    }
}
