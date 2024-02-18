<?php
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/tweets', function () {
    return view('tweets');
})->name('tweets');

Route::get('/tweets', [TweetController::class, 'getall'])->name('tweets');
Route::delete('/tweets/delete/{id}', [tweetController::class, 'delete'])->name('tweets.delete');
Route::post('/tweets/add', [tweetController::class, 'add'])->name('tweets.add');

