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


//frontend routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/typography', [FrontendController::class, 'typography'])->name('frontend.typography');

Route::get('/tours', [TourController::class, 'index'])->name('tours.index');
Route::get('/hajj', [HajjController::class, 'index'])->name('hajj.index');
Route::get('/umrah', [UmrahController::class, 'index'])->name('umrah.index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

Route::get('/create-package', [FrontendController::class, 'createPackage'])->name('create.package');