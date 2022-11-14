<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Company;
use Database\Seeders\JobSeeder;
use Database\Seeders\JobApplicantSeeder;
use Database\Seeders\JobVacanciesSeeder;
use Database\Seeders\UserEducationSeeder;
use Database\Seeders\SpecializationSeeder;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            SpecializationSeeder::class
        ]);

        User::factory(3)->create();
        Company::factory(3)->create();

        $this->call([
            UserEducationSeeder::class,
            JobSeeder::class,
            JobVacanciesSeeder::class,
            JobApplicantSeeder::class,
        ]);
    }
}
