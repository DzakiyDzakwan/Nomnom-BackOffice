<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RouteController;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\User;
use App\Http\Livewire\Pages\UserDetail;
use App\Http\Livewire\Pages\Ingredient;
use App\Http\Livewire\Pages\Utensill;
use App\Http\Livewire\Pages\Category;
use App\Http\Livewire\Pages\SubCategory;
use App\Http\Livewire\Pages\Test;

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


Route::get('login', [LoginController::class, 'index'])->name('login');

/* Controller Layout */
/* Route::controller(RouteController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/user', 'user');
    Route::get('/user-detail', 'detail');
    Route::get('/ingredient', 'ingredient');
    Route::get('/utensill', 'utensill');
    Route::get('/category', 'category');
}); */

/* Livewire Layout */
Route::get('/test', Test::class)->name('test');
Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/user', User::class)->name('user');
Route::get('/user-detail', UserDetail::class)->name('user-detail');
Route::get('/ingredient', ingredient::class)->name('ingredient');
Route::get('/utensill', Utensill::class)->name('utensill');
Route::get('/category', Category::class)->name('category');
Route::get('/sub-category', SubCategory::class)->name('sub-category');
