<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [UserController::class, 'update'])->name('profile.update');

    Route::group(['prefix' => 'car', 'as' => 'car.'],function () {
        Route::resource('/', CarController::class)->parameters([
            '' => 'car'
        ]);
    });
});

Route::get('/cars', [HomeController::class, 'cars'])->name('cars');
Route::get('/car/{car}', [HomeController::class, 'detail'])->name('detail');
Route::get('/get-cars', [HomeController::class, 'getCars'])->name('get-cars');
Route::get('/get-cars-all', [HomeController::class, 'getCarsAll'])->name('get-cars-all');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
