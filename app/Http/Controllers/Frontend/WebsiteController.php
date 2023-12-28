<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function dashboard()
    {
        try {
            if (auth('user')->check() && authUser()->role == 'candidate') {
                return redirect()->route('candidate.dashboard');
            } elseif (auth('user')->check() && authUser()->role == 'company') {
                storePlanInformation();

                return redirect()->route('company.dashboard');
            }

            return redirect('login');
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
