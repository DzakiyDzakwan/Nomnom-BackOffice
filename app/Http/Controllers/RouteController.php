<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function user() {
        return view('user');
    }

    public function detail() {
        return view('user-detail');
    }

    public function ingredient() {
        return view('ingredient');
    }


    public function utensill() {
        return view('utensill');
    }

    public function category() {
        return view('category');
    }
}
