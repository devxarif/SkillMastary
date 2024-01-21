<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Frontend\Public\FetchCourseQueryService;

class WebsiteApiController extends Controller
{
    /**
     * Show the application course page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function fetchCourse(){
        return (new FetchCourseQueryService())->execute();
    }

    /**
     * Fetching current page url
     */
    public function fetchCurrentUrl(){
        // return 1234;
        return request()->getRequestUri();
        $url = request()->url();
        $path = parse_url($url, PHP_URL_PATH);
        $pathSegments = explode('/', $path);

        return $pathSegments;
    }
}
