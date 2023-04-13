<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Http\Controllers\AboutController;

Auth::routes();
 
Route::get('/home', [HomeController::class, 'index'])->name('home');
 
Route::middleware("auth")->group(function () {
    Route::get('plans', [PlanController::class, 'index']);
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', [AboutController::class,'index']);
Route::get('/service', [ServiceController::class,'index']);
Route::get('/grain', [GrainController::class,'get_grain']);
Route::get('/hebibicid', [HebibicidController::class,'get_herbecide']);
Route::get('/phosphat', [PhosphatController::class,'get_phosphate']);
Route::get('/contact', [ContactController::class,'index']);




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
