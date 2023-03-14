<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use database\seeders\RoboticsKitsTableSeeder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



        public function definition(): array
        {
            $kit = RoboticsKit::inRandomOrder()->first();

            return [
                'id' => $this->faker->string(2),
                'key' => $this->faker->string(4),
                'name' => $this->faker->string(4),
                'content' => $this->faker->string(4),
                'robotics_kit' => $kits->random()->id
            ];
        }
}
