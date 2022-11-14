<?php

namespace Database\Seeders;

use App\Models\JobVacancies;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobVacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobVacancies::create([
            'position' => 'Senior Developer',
            'description' => 'able to develop',
            'company_id' => 1,
            'job_id' => 1,
        ]);

        JobVacancies::create([
            'position' => 'Senior Designer',
            'description' => 'able to design',
            'company_id' => 1,
            'job_id' => 2,
        ]);

        JobVacancies::create([
            'position' => 'Techlead',
            'description' => 'able to lead',
            'company_id' => 1,
            'job_id' => 3,
        ]);

    }
}
