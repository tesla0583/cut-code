<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware("r")->group(function () {
    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
    Route::post('/contact_form', [\App\Http\Controllers\IndexController::class, 'index'])->name('contact_form');
});
