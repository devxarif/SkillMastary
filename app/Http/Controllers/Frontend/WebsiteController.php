<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Frontend\Public\FetchHomePageService;
use App\Services\Frontend\Public\FetchCourseQueryService;

class WebsiteController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = (new FetchHomePageService())->execute();

        return view('frontend.pages.others.index', $data);
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about(){
        return view('frontend.pages.others.about');
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact(){
        return view('frontend.pages.others.contact');
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function becomeInstructor(){
        return view('frontend.pages.others.become-instructor');
    }

    /**
     * Show the application course page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function course(Request $request){
        // if ($request->api) {
        //     # code...
        //     if ($request->hasAny(['page','search', 'category', 'level', 'price', 'duration', 'rating'])) {
        //         // request()->remove('api');

        //         // unset($request['api']);

        //         return (new FetchCourseQueryService())->execute($request);
        //     }
        // }

        return view('frontend.pages.others.course');
    }

    /**
     * Show the application course details page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function courseDetails(Course $course){
        $course->load([
            'category:id,name,slug',
            'subcategory:id,name,slug',
            'user:id,name,avatar,username',
            'courseLearnings:id,name,course_id'
        ]);

        return view('frontend.pages.others.course-details', compact('course'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        try {
            if (authCheck() && authUser()->role == 'student') {
                return to_route('website.student.dashboard');
            } elseif (authCheck() && authUser()->role == 'instructor') {
                return to_route('website.instructor.dashboard');
            }

            return to_route('website.login');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
