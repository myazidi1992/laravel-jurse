<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/users', [UserController::class, 'getall'])->name('users');
Route::delete('/users/delete/{id}', [userController::class, 'delete'])->name('users.delete');
Route::post('/users/add', [userController::class, 'add'])->name('users.add');

