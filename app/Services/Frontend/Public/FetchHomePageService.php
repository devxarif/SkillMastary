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

        return [
            'categories' => $categories,
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
        return Course::with(['user', 'category', 'subcategory', 'courseLevel'])
            ->where('is_featured', true)
            ->where('status', 'published')
            ->latest()
            ->take(12)
            ->get();
    }
}
