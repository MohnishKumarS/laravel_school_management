<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::Class,'index']);
Route::get('/about-us', [HomeController::Class,'about_us']);
Route::get('/admission', [HomeController::Class,'admission']);
Route::get('std-details/{id}',[HomeController::Class,'std_details']);


Route::controller(DashboardController::class)->group(function(){
    Route::get('banners','showBanners');
    Route::get('news','showNews');
    Route::get('quotes','showQuotes');
    Route::get('standard','showStandard');
    Route::get('students','showStudents');
    Route::get('teachers','showTeachers');
});

Route::controller(QuoteController::class)->group(function(){
    Route::post('add-quote','add_quote');
    Route::post('update-quote/{id}','update_quote');
    Route::get('delete-quote/{id}','delete_quote');
});
Route::controller(NewsController::class)->group(function(){
    Route::post('add-news','add_news');
    Route::post('update-news/{id}','update_news');
    Route::get('delete-news/{id}','delete_news');
});
Route::controller(TeacherController::class)->group(function(){
    Route::post('add-teacher','add_teacher');
    Route::put('update-teacher','update_teacher');
    Route::get('delete-teacher/{teacher_id}','delete_teacher');
});
Route::controller(StudentController::class)->group(function(){
    Route::post('add-student','add_student');
    Route::get('delete-student/{student_id}','delete_student');
});
Route::controller(StandardController::class)->group(function(){
    Route::post('add-std','add_std');
    Route::get('delete-std/{id}','delete_std');
});
Route::controller(BannerController::Class)->group(function(){
    Route::post('add-banner','add_banner');
    Route::post('update-banner/{id}','update_banner');
    Route::get('delete-banner/{id}','delete_banner');
});
Route::controller(AdmissionController::Class)->group(function(){
    Route::post('add-admission','add_admission');

});

Auth::routes();

Route::get('/home', [DashboardController::class, 'dashboard'])->name('home');
