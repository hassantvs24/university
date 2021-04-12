<?php

use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Course\SubjectCategoryController;
use App\Http\Controllers\Course\SubjectsController;
use App\Http\Controllers\Course\SubjectTypeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Settings\AcademicYearController;
use App\Http\Controllers\Student\BatchController;
use App\Http\Controllers\Settings\DepartmentController;
use App\Http\Controllers\Student\SectionController;
use App\Http\Controllers\Student\StudentCategoryController;
use App\Http\Controllers\Student\StudentController;
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

        Route::put('/course/add-subject/{id}', [CourseController::class, 'add_subject_item'])->name('course.add_subject');
        Route::put('/course/edit-subject/{id}', [CourseController::class, 'edit_subject_item'])->name('course.edit_subject');
        Route::delete('/course/del-subject/{id}', [CourseController::class, 'del_subject_item'])->name('course.del_subject');
        Route::resource('/course', CourseController::class);

        Route::resource('/student/section', SectionController::class);
        Route::resource('/student/batch', BatchController::class);
        Route::resource('/student/category', StudentCategoryController::class, ['as' => 'student']);
        Route::resource('/student', StudentController::class);

        Route::resource('/settings/year', AcademicYearController::class);
        Route::resource('/settings/department', DepartmentController::class);
    });
});
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
