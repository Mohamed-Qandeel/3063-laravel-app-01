<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

// Route::prefix('users')->group(function () {

//     Route::get('/', 'App\Http\Controllers\UserController@index');
//     Route::post('/', 'App\Http\Controllers\UserController@store');

//     Route::get('/{id}', 'App\Http\Controllers\UserController@show');
//     Route::get('/create', 'App\Http\Controllers\UserController@create');
//     Route::get('/{id}/edit', 'App\Http\Controllers\UserController@edit');
// });

// Route::prefix('users')->group(function () {

//     // Route::get('/', ['App\Http\Controllers\UserController', 'index']);
//     Route::get('/', [UserController::class, 'index']);
//     Route::post('/', [UserController::class, 'store']);
//     Route::get('/{id}', [UserController::class, 'show']);
//     Route::get('/create', [UserController::class, 'create']);
//     Route::get('/{id}/edit', [UserController::class, 'edit']);
// });


// Route::resource('users', UserController::class);

// Route::resource('posts', PostController::class);

// Route::resource('comments', CommentController::class);

Route::resources(
    [
        'posts' => PostController::class,
        'comments' => CommentController::class,
        'users' => UserController::class
    ]
);