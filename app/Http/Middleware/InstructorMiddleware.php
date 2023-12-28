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
            return redirect()->route('instructor.dashboard');
        }elseif (authUser()->role == 'student') {
            return $next($request);
        }

        return to_route('website.login');
    }
}
