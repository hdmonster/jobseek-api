<?php

namespace Database\Seeders;

use App\Models\UserEducation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserEducation::create([
            'user_id' => 1,
            'name' => 'Bachelor of Comp. Science',
            'year' => '2014'
        ]);

        UserEducation::create([
            'user_id' => 1,
            'name' => 'MBA',
            'year' => '2022'
        ]);
    }
}
