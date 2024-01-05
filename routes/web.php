<?php

use App\Models\Course;
use App\Models\User;

require __DIR__.'/website.php';
require __DIR__.'/admin.php';




// // Instead of this:
// $course = Course::where('slug', 'my-course')->first();
// return $user->title; // My Course

// // You can do this:
// return Course::where('slug', 'my-course')->value('title'); // My Course






// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


