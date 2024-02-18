<?php
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/links', function () {
    return view('links');
})->name('links');

Route::get('/links', [LinkController::class, 'getall'])->name('links');
Route::delete('/links/delete/{id}', [linkController::class, 'delete'])->name('links.delete');
Route::post('/links/add', [LinkController::class, 'add'])->name('links.add');

