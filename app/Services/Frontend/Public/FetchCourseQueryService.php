<?php

namespace App\Services\Frontend\Public;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Http\Request;

class FetchCourseQueryService
{
    public function execute($request)
    {
        $courses = Course::query();

        if ($request->search) {
            $courses->where('title', 'like', '%' . $request->search . '%');
        }

        // if (request()->has('category')) {
        //     $courses->whereHas('category', function ($query) {
        //         $query->where('slug', request()->category);
        //     });
        // }

        // if (request()->has('level')) {
        //     $courses->where('level', request()->level);
        // }


        // if ($request->hasAny(['page','search', 'category', 'level', 'price', 'duration', 'rating'])) {


        $courses = $courses->with('category:id,name,slug')->simplePaginate(12);

        return [
            'courses' => $courses,
            'current_url' => request()->getRequestUri(),
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
