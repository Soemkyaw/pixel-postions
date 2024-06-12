<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\RegisteredUserController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[JobController::class,'index']);
Route::get('/jobs',[JobController::class,'create']);
Route::post('/jobs',[JobController::class,'store'])->name('jobs.store');
Route::get('/search',SearchController::class,'search');
Route::get('/tag/{tag:name}',[TagController::class,'search']);

Route::get('/employers',[EmployerController::class,'index']);
Route::get('/employers/{employer:name}',[EmployerController::class,'show']);

Route::get('/salaries',[SalaryController::class,'index']);
Route::get('/salaries/{min}/{max}',[SalaryController::class,'show'])->name('salaries');

Route::get('/register',[RegisteredUserController::class,'create'])->name('register');
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store'])->name('login');
Route::delete('/logout',[SessionController::class,'destroy']);


