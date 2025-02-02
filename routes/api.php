<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/login', function () {
    return view('layouts.login');
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::view('/home', 'home')->name('api/home');
    Route::get('/blog', [PostController::class, 'method'])->name('api/blog');
    Route::view('/contact', 'contact')->name('api/contact');
    Route::view('/about', 'about')->name('api/about');
});