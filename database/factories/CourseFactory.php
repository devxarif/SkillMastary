<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Models\CourseLevel;
use App\Models\Subcategory;
use Illuminate\Support\Arr;
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
        $price = fake()->randomFloat(2, 0, 999999.99);
        $discountPrice = fake()->randomFloat(2, 0, $price);
        $total_review = rand(1, 100);
        $total_stars = $total_review * rand(1, 5);
        $featured = rand(0, 1);

        return [
            "uuid" => fake()->uuid,
            "category_id" => Category::inRandomOrder()->value("id"),
            "subcategory_id" => Subcategory::inRandomOrder()->value("id"),
            "user_id" => User::instructor()->inRandomOrder()->value("id"),
            'course_level_id' => CourseLevel::inRandomOrder()->value("id"),
            "title" => fake()->name,
            "description" => fake()->sentence(4),
            "thumbnail" => fake()->imageUrl(),
            "video" => fake()->imageUrl(),
            "price" => $price,
            "discount_price" => $discountPrice,
            "usd_price" => fake()->randomFloat(2, 0, 999999.99),
            "usd_discount_price" => fake()->randomFloat(2, 0, 999999.99),
            "duration" => Arr::random(['6 hour', '12 hour', '18 hour', '24 hour']),
            "total_enrolled" => fake()->randomNumber(),
            "total_stars" => $total_stars,
            "total_reviews" => $total_review,
            "revenue" => fake()->randomFloat(2, 0, 999999.99),
            "status" => fake()->randomElement(["draft","published","rejected","pending", 'published', 'published']),
            "meta_keywords" => fake()->word,
            "meta_description" => fake()->sentence(4),
            "is_featured" => $featured,
            "is_popular" => fake()->boolean,
            "featured_at" => $featured ? fake()->dateTime: null,
            "published_at" => fake()->dateTime,
        ];
    }
}
