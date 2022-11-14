<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name' => 'Developer',
            'icon' => 'https://media.istockphoto.com/id/947663966/vector/programming-design-concept.jpg?b=1&s=612x612&w=0&k=20&c=9SM75f4dCGzSeClxu03vAsu0sR1p3VpeI6dBHUW5BVg=',
            'specialization_id' => 1
        ]);
        Job::create([
            'name' => 'UI/UX Designer',
            'icon' => 'https://media.istockphoto.com/id/1225037435/vector/computer-graphics-designer-work-on-desk-in-office-concept-vector.jpg?s=612x612&w=0&k=20&c=phL284cDeXgo5RJOf4wkBmvICPvlY2m7vQ3194ZWGgs=',
            'specialization_id' => 1
        ]);
        Job::create([
            'name' => 'Product Manager',
            'icon' => 'https://st.depositphotos.com/3526225/4895/v/600/depositphotos_48953021-stock-illustration-business-management-concept-flat-illustration.jpg',
            'specialization_id' => 1
        ]);
    }
}
