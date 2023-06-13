<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/learner_profile', [App\Http\Controllers\LearnerController::class, 'index'])->name('Learner_profile');

Route::get('/quiz', [App\Http\Controllers\QuizController::class, 'index'])->name('quiz');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/course_material', [App\Http\Controllers\CourseController::class, 'index'])->name('course_material');

Route::get('/teacher-panel', [App\Http\Controllers\TeacherPanelController::class, 'index'])->name('teacher-panel');

Route::get('/about-us', [App\Http\Controllers\InfoController::class, 'index'])->name('about-us');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
