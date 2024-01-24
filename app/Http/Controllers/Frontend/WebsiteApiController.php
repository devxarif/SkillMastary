<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Frontend\Public\FetchCourseQueryService;
use App\Services\Frontend\Public\FetchCourseResourceService;

class WebsiteApiController extends Controller
{
    /**
     * Show the application course page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function fetchCourse(Request $request){
        return (new FetchCourseQueryService())->execute($request);
    }

    /**
     * Show the application course page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function fetchResource(Request $request){
        return (new FetchCourseResourceService())->execute($request);
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
