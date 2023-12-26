<?php

namespace Database\Factories;

use App\Models\Freelancer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class FreelancerFactory extends Factory
{
    protected $model = Freelancer::class;

    public function definition(): array
    {
        return [
            'FirstName' => $this->faker->firstName(),
            'LastName' => $this->faker->lastName(),
            'UserName' => $this->faker->userName(),
            'Password' => bcrypt($this->faker->password()),
            'Email' => $this->faker->unique()->safeEmail(),
            'City' => $this->faker->city(),
            'Skills' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
