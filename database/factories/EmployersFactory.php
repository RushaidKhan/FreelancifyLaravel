<?php

namespace Database\Factories;

use App\Models\Employers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EmployersFactory extends Factory
{
    protected $model = Employers::class;

    public function definition(): array
    {
        return [
            'CompanyName' => $this->faker->name(),
            'EmployerName' => $this->faker->name(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Password' => bcrypt($this->faker->password()),
            'city/country' => $this->faker->word(),
            'url' => $this->faker->url(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
