<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

#POST
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/detail/{slug}',[PostController::class, "show"]);




#POST

#COMMENTS
Route::get('/comments', [CommentController::class, 'index']);
Route::post('/comments', [CommentController::class, 'store']);


#COMMENTS
