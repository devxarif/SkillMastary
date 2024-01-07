<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseRating>
 */
class CourseRatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::student()->inRandomOrder()->value('id'),
            'course_id' => Course::inRandomOrder()->value('id'),
            'stars' => rand(1, 5),
            'comment' => $this->faker->text(200),
        ];
    }
}
