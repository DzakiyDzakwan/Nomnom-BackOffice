<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function(){
    return view('dashboard');
});

Route::get('/user', function(){
    return view('user');
});

Route::get('/user-detail', function(){
    return view('userdetail');
});

Route::get('/utensill', function(){
    return view('utensill');
});

Route::get('/ingredient', function(){
    return view('ingredient');
});

Route::get('/category', function(){
    return view('category');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
