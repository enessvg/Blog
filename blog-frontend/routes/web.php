<?php

use App\Http\Controllers\FrontendPostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('post/detail/{slug}', [FrontendPostController::class, 'show']);
Route::get('/post/all', [FrontendPostController::class,'index']);
