<?php

use App\Http\Controllers\FrontendPostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('post/detail/{slug}', [FrontendPostController::class, 'show']);



Route::get('/kvkk-aydinlatma-metni', [HomeController::class,'kvkk']);
Route::get('/gizlilik-politikasi', [HomeController::class,'privacy_policy']);

// Route::get('/post/all', [FrontendPostController::class,'index']);
// Route::get('/post/populer', [FrontendPostController::class,'popularPost']);
