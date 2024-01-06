<?php

namespace App\Services\Frontend\Public;

use App\Models\Course;
use App\Models\Category;

class FetchHomePageService
{
    public function execute()
    {
        $categories = $this->fetchTopCategories();
        $featuredCourses = $this->fetchFeaturedCourses();
        $latestCourses = $this->fetchLatestCourses();

        return [
            'categories' => $categories,
            'featuredCourses' => $featuredCourses,
            'latestCourses' => $latestCourses,
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
        return Course::with(['user:id,name,avatar', 'category:id,name,slug'])
            ->published()
            ->latest('published_at')
            ->take(8)
            ->get();
    }
}
