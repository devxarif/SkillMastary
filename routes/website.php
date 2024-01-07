<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\StudentController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Frontend\InstructorController;
use App\Http\Controllers\Frontend\SocialLoginController;
use App\Models\Course;
use App\Models\CourseWishlist;
use App\Models\User;

Route::get('/test', function(){
    $course = Course::find(44);
    $user = authUser();
    $alreadyWishlist = CourseWishlist::where('user_id', $user->id)->where('course_id', $course->id)->first();

    if ($alreadyWishlist) {
        $alreadyWishlist->delete();
    }else{
        CourseWishlist::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
        ]);
    }

    return CourseWishlist::where('user_id', $user->id)->get();


    return app('hello_world');
    $categories = \File::json(resource_path('content/categories.json'));

    return $categories;
    return App\Enums\UserRoleEnum::ROLE_STUDENT?->value;
    return App\Enums\UserRoleEnum::getValues();
});

Route::name('website.')->group(function(){
    // Authentication Controller
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::post('/logout', 'logout')->name('logout');
    });

    // Social Authentication
    Route::controller(SocialLoginController::class)->group(function () {
        Route::get('/auth/{provider}/redirect', 'redirect')->name('social.login');
        Route::get('/auth/{provider}/callback', 'callback');
    });

    // Website Controller
    Route::controller(WebsiteController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/courses', 'course')->name('course');
        Route::get('/courses/{hello}', 'courseDetails')->name('course.details');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/become-instructor', 'becomeInstructor')->name('become-instructor');
        Route::get('/user/dashboard', 'dashboard')->name('dashboard');
    });

    // Student Controller
    Route::controller(StudentController::class)->middleware(['auth:user','student'])->prefix('student')->name('student.')->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    // Instructor Controller
    Route::controller(InstructorController::class)->middleware(['auth:user','instructor'])->prefix('instructor')->name('instructor.')->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});

