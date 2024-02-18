<?php
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/authors', function () {
    return view('authors');
})->name('authors');

Route::get('/authors', [AuthorController::class, 'getall'])->name('authors');
Route::delete('/authors/delete/{id}', [authorController::class, 'delete'])->name('authors.delete');
Route::post('/authors/add', [authorController::class, 'add'])->name('authors.add');

