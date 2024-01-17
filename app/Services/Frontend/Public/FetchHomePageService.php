<?php

namespace App\Services\Frontend\Public;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;

class FetchHomePageService
{
    public function execute()
    {
        $categories = $this->fetchTopCategories();
        $topRatedCourses = $this->fetchTopRatedCourses();
        $featuredCourses = $this->fetchFeaturedCourses();
        $latestCourses = $this->fetchLatestCourses();
        $featuredInstructor = $this->fetchFeaturedInstructor();
        $topInstructors = $this->fetchTopInstructors();

        return [
            'categories' => $categories,
            'topRatedCourses' => $topRatedCourses,
            'featuredCourses' => $featuredCourses,
            'latestCourses' => $latestCourses,
            'featuredInstructor' => $featuredInstructor,
            'topInstructors' => $topInstructors,
        ];
    }

    private function fetchTopCategories()
    {
        return Category::withCount(['courses' => function($query){
            return $query->where('status', 'published');
        }])
        ->latest('courses_count')
        ->having('courses_count', '>', 0)
        ->take(12)
        ->get();
    }

    private function fetchTopRatedCourses()
    {
        return Course::with(['user:id,name,avatar', 'category:id,name,slug', 'courseLevel:id,name'])
            ->published()
            ->latest('total_stars')
            ->latest('total_reviews')
            ->take(10)
            ->get();
    }

    private function fetchFeaturedCourses()
    {
        return Course::with(['user:id,name,avatar', 'category:id,name,slug', 'courseLevel:id,name'])
            ->published()
            ->featured()
            ->latest('featured_at')
            ->take(10)
            ->get();
    }

    private function fetchLatestCourses()
    {
        return Course::with(['user:id,name,avatar', 'category:id,name,slug', 'courseLevel:id,name'])
            ->published()
            ->latest('published_at')
            ->withCount(['wishlists as wishlisted' => function ($q) {
                    $q->where('user_id', authCheck() ? auth('user')->id() : '');
                },
            ])
            ->take(8)
            ->get();
    }

    private function fetchFeaturedInstructor()
    {
        $instructor = Instructor::with(['user:id,name,avatar'])
            ->featured()
            ->latest('featured_at')
            ->first();

        $instructor->courses = [];

        if ($instructor) {
            $instructor->courses = Course::with(['user:id,name,avatar', 'category:id,name,slug', 'courseLevel:id,name'])
                ->published()
                ->whereBelongsTo($instructor->user)
                ->latest('published_at')
                ->take(10)
                ->get();
            $instructor->total_courses = $instructor->courses->count();
        }

        return $instructor;
    }

    private function fetchTopInstructors()
    {
        return Instructor::with(['user:id,name,avatar,title'])
            ->popular()
            ->latest('popular_at')
            ->take(5)
            ->get();
    }
}
