<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(SurveysTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(ResultsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(CorrectAnswersTableSeeder::class);
    }
}
