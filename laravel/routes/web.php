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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'Index' ])->name('home');
Route::get('/', [\App\Http\Controllers\MainController::class, 'Index'])->name('home');
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'Index'])->name('search');
