<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InstructorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (authUser()->role == 'instructor') {
            return $next($request);
        }elseif (authUser()->role == 'student') {
            return redirect()->route('website.instructor.dashboard');
        }

        return to_route('website.login');
    }
}
