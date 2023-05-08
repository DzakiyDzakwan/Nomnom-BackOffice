<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Livewire\Test;

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

/* Route::get('/test', Test::class); */



Route::get('login', [LoginController::class, 'index'])->name('login');

Route::controller(RouteController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/user', 'user');
    Route::get('/user-detail', 'detail');
    Route::get('/ingredient', 'ingredient');
    Route::get('/utensill', 'utensill');
    Route::get('/category', 'category');
});
