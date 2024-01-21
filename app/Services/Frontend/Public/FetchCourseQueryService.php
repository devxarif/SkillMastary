<?php

namespace App\Services\Frontend\Public;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;

class FetchCourseQueryService
{
    public function execute()
    {
        return [
            'courses' => Course::with('category:id,name,slug')->simplePaginate(12),
            'currentUrl' => request()->getRequestUri(),
        ];

        // $categories = $this->fetchTopCategories();
        // $topRatedCourses = $this->fetchTopRatedCourses();
        // $featuredCourses = $this->fetchFeaturedCourses();
        // $latestCourses = $this->fetchLatestCourses();
        // $featuredInstructor = $this->fetchFeaturedInstructor();
        // $topInstructors = $this->fetchTopInstructors();

        // return [
        //     'categories' => $categories,
        //     'topRatedCourses' => $topRatedCourses,
        //     'featuredCourses' => $featuredCourses,
        //     'latestCourses' => $latestCourses,
        //     'featuredInstructor' => $featuredInstructor,
        //     'topInstructors' => $topInstructors,
        // ];
    }
}
