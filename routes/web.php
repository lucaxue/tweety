<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetLikeController;
use App\Http\Controllers\TweetDislikeController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetController::class, 'store']);

    Route::post('/tweets/{tweet}/like', [TweetLikeController::class, 'store']);
    Route::post('/tweets/{tweet}/dislike', [TweetDislikeController::class, 'store']);

    Route::delete('/tweets/{tweet}/like', [TweetLikeController::class, 'delete']);
    Route::delete('/tweets/{tweet}/dislike', [TweetDislikeController::class, 'delete']);

    Route::get('/profiles/{user:username}', [ProfileController::class, 'show'])->name('profile');
    Route::post('/profiles/{user:username}/follow', [FollowController::class, 'store'])->name('follow');

    Route::middleware('can:update,user')->group(function () {
        Route::get('/profiles/{user:username}/edit', [ProfileController::class, 'edit']);
        Route::patch('/profiles/{user:username}', [ProfileController::class, 'update']);
    });

    Route::get('/explore', ExploreController::class)->name('explore');
});
