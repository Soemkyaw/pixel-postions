<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'job_descriptions' => fake()->paragraph(),
            'job_requirements' => fake()->paragraph(),
            'recruiting_candidates' => fake()->randomElement(['Male - 1','Female - 1','Male/Female - 1']),
            'location' => "Yangon",
            'schedule' => 'Full Time',
            'salary' => fake()->randomElement([180000,200000,300000,600000,800000,1000000,1200000,1500000]),
            'contact_number' => fake()->phoneNumber()
        ];
    }
}
