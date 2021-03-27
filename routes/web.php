<?php

use App\Http\Controllers\Course\CourseCategoryController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Course\SubjectCategoryController;
use App\Http\Controllers\Course\SubjectsController;
use App\Http\Controllers\Course\SubjectTypeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Settings\AcademicYearController;
use App\Http\Controllers\Settings\DepartmentController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth', 'student'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('student.dashboard');

});


Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('admin.dashboard');

        Route::resource('/course/subject/category', SubjectCategoryController::class, ['as' => 'subject']);
        Route::resource('/course/subject/type', SubjectTypeController::class, ['as' => 'subject']);
        Route::resource('/course/subject', SubjectsController::class);

        Route::resource('/course/category', CourseCategoryController::class, ['as' => 'course']);
        Route::resource('/course', CourseController::class);

        Route::resource('/settings/year', AcademicYearController::class);
        Route::resource('/settings/department', DepartmentController::class);
    });
});
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
