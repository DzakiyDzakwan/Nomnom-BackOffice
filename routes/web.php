<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Livewire\Auth\Login;
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


/* Livewire Layout */
Route::get('/', Login::class)->name('login');
Route::get('/test', Test::class)->name('test');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/user', User::class)->name('user');
Route::get('/user-detail/{id}', UserDetail::class)->name('user-detail');
Route::get('/ingredient', ingredient::class)->name('ingredient');
Route::get('/utensill', Utensill::class)->name('utensill');
Route::get('/category', Category::class)->name('category');
Route::get('/sub-category', SubCategory::class)->name('sub-category');
