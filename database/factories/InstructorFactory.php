<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $total_review = rand(1, 100);
        $total_stars = $total_review * rand(1, 5);
        $featured = rand(0, 1);

        return [
            'user_id' => User::instructor()->inRandomOrder()->value('id'),
            'total_stars' => $total_stars,
            'total_reviews' => $total_review,
            'is_featured' => $featured,
            'featured_at' => $featured ? fake()->dateTimeBetween('-1 year', 'now') : null,
        ];
    }
}
