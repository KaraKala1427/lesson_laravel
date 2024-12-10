<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [NewsController::class, 'index'])
    ->name('homepage');

Route::get('/news/create-page', [HomePageController::class, 'getCreateNewsPage'])
    ->name('create-news');

Route::post('/news', [NewsController::class, 'create'])
    ->name('create-news-post');

Route::get('/news/{id}', [NewsController::class, 'detail'])
    ->name('one-news');

Route::get('/news/update/{id}', [NewsController::class, 'getUpdatePage'])
    ->name('update-news-page');

Route::post('/news/update/{id}', [NewsController::class, 'update'])
    ->name('update-news-post');

Route::delete('/news/{id}', [NewsController::class, 'delete'])
    ->name('delete-news');

Route::view('/about', 'company.docker')->name('about');

Route::prefix('/profile')->group( function () {
    Route::get('/welcome-page', [PersonPageController::class, 'welcomePage'])->name('profile.welcome');
    Route::get('/{cityName}', [PersonPageController::class, 'detailPage'])->name('profile.detail');
});
