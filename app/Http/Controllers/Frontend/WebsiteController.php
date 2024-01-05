<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('frontend.pages.others.index');
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
    public function course(){
        return view('frontend.pages.others.course');
    }

    /**
     * Show the application course details page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function courseDetails(){
        return view('frontend.pages.others.course-details');
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
