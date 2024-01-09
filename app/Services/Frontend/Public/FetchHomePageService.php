<?php

namespace App\Services\Frontend\Public;

use App\Models\Course;
use App\Models\Category;

class FetchHomePageService
{
    public function execute()
    {
        $categories = $this->fetchTopCategories();
        $topRatedCourses = $this->fetchTopRatedCourses();
        $featuredCourses = $this->fetchFeaturedCourses();
        $latestCourses = $this->fetchLatestCourses();

        return [
            'categories' => $categories,
            'topRatedCourses' => $topRatedCourses,
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

    private function fetchTopRatedCourses()
    {
        return Course::with(['user:id,name,avatar', 'category:id,name,slug'])
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
        return Course::with(['user:id,name,avatar', 'category:id,name,slug'])
            ->published()
            ->latest('published_at')
            ->withCount(['wishlists as wishlisted' => function ($q) {
                    $q->where('user_id', authCheck() ? auth('user')->id() : '');
                },
            ])
            ->take(8)
            ->get();


            // $featured_jobs_query = Job::query()->withoutEdited()->with('company.user', 'job_type:id,name', 'category')->withCount([
            //     'bookmarkJobs', 'appliedJobs',
            //     'bookmarkJobs as bookmarked' => function ($q) {
            //         $q->where('candidate_id', auth('user')->check() && currentCandidate() ? currentCandidate()->id : '');
            //     }, 'appliedJobs as applied' => function ($q) {
            //         $q->where('candidate_id', auth('user')->check() && currentCandidate() ? currentCandidate()->id : '');
            //     },
            // ]);
    }
}
