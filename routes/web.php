<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ProfileController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetController::class, 'store']);

    Route::post('/profiles/{user:username}/follow', [FollowController::class, 'store'])->name('follow');

    Route::middleware('can:update,user')->group(function () {
        Route::get('/profiles/{user:username}/edit', [ProfileController::class, 'edit']);
        Route::patch('/profiles/{user:username}', [ProfileController::class, 'update']);
    });

    Route::get('/explore', ExploreController::class)->name('explore');
});

Route::get('/profiles/{user:username}', [ProfileController::class, 'show'])->name('profile');
