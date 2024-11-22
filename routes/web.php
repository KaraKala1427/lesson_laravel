<?php

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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::view('/about', 'company.docker')->name('company');

Route::prefix('/profile')->group( function () {
    Route::get('/yernar', function () {
        return view('profile.yernar');
    })->name('profile.yernar');

    Route::get('/askar', function () {
        return view('profile.askar');
    })->name('profile.askar');
});
