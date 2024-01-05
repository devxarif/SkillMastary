<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Models\CourseLevel;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            "uuid" => fake()->uuid,
            "category_id" => Category::inRandomOrder()->value("id"),
            "subcategory_id" => Subcategory::inRandomOrder()->value("id"),
            "user_id" => User::inRandomOrder()->value("id"),
            'course_level_id' => CourseLevel::inRandomOrder()->value("id"),
            "title" => fake()->sentence(1),
            "description" => fake()->sentence(4),
            "thumbnail" => fake()->imageUrl(),
            "video" => fake()->imageUrl(),
            "price" => fake()->randomFloat(2, 0, 999999.99),
            "discount_price" => fake()->randomFloat(2, 0, 999999.99),
            "total_enrolled" => fake()->randomNumber(),
            "total_stars" => fake()->randomNumber(),
            "total_reviews" => fake()->randomFloat(2, 0, 999999.99),
            "revenue" => fake()->randomFloat(2, 0, 999999.99),
            "status" => fake()->randomElement(["draft","published","approved","rejected","pending"]),
            "meta_keywords" => fake()->word,
            "meta_description" => fake()->sentence(4),
            "is_featured" => fake()->boolean,
            "is_popular" => fake()->boolean,

        ];
    }
}
