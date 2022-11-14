<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialization::create([
            'icon' => 'https://thumbs.dreamstime.com/b/circle-technology-vector-icon-stock-illustration-you-can-use-tech-logos-etc-start-editing-logo-your-company-177105940.jpg',
            'name' => 'Technology'
        ]);
    }
}
