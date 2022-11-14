<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'email' => fake()->companyEmail(),
            'website' => 'examle.com',
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'logo' => 'https://www.logodesign.net/logo/line-art-house-roof-and-buildings-4485ld.png',
            'specialization_id' => 1,
        ];
    }
}
