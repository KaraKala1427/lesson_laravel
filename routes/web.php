<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PersonPageController;
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

Route::get('/', [HomePageController::class, 'homepage'])
    ->name('homepage');

Route::view('/about', 'company.docker')->name('company');

Route::prefix('/profile')->group( function () {
    Route::get('/welcome-page', [PersonPageController::class, 'welcomePage'])->name('profile.welcome');
    Route::get('/{cityName}', [PersonPageController::class, 'detailPage'])->name('profile.detail');
});
