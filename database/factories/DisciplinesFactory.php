<?php

namespace Database\Factories;

use App\Providers\CustomJobProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disciplines>
 */
class DisciplinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new CustomJobProvider($this->faker));

        return [
            'discipline' => $this->faker->jobTitle,
        ];
    }
}
