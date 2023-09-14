<?php

use App\Http\Controllers\frontEnd\FrontendController;
use App\Http\Controllers\frontEnd\HajjController;
use App\Http\Controllers\frontEnd\NewsController;
use App\Http\Controllers\frontEnd\TourController;
use App\Http\Controllers\frontEnd\UmrahController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::resource('tours', TourController::class);
Route::resource('hajjz', HajjController::class);
Route::resource('umrahs', UmrahController::class);
Route::resource('news', NewsController::class);

//frontend routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/typography', [FrontendController::class, 'typography'])->name('frontend.typography');
