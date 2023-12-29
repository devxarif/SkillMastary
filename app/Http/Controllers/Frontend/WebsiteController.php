<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('frontend.pages.others.index');
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
