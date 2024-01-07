<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseRating;
use App\Models\CourseWishlist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory(50)->create()->each(function ($course) {
            CourseRating::factory(20)->create([
                'course_id' => $course->id,
            ]);
            CourseWishlist::factory(rand(1, 10))->create([
                'course_id' => $course->id,
            ]);
            // $course->categories()->attach(rand(1, 4));
            // $course->subcategories()->attach(rand(1, 4));
            // $course->levels()->attach(rand(1, 4));
        });
    }
}
