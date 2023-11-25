<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/contact', function () {
    return view('pages.contact');
});