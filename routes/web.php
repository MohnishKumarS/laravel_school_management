<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StandardController;

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

Route::controller(QuoteController::class)->group(function(){
    Route::post('add-quote','add_quote');
    Route::post('update-quote/{id}','update_quote');
    Route::get('delete-quote/{id}','delete_quote');
});
Route::controller(TeacherController::class)->group(function(){
    Route::post('add-teacher','add_teacher');
    Route::get('delete-teacher/{teacher_id}','delete_teacher');
});
Route::controller(StandardController::class)->group(function(){
    Route::post('add-std','add_std');
    Route::get('delete-std/{id}','delete_std');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
