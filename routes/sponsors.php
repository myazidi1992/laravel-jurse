<?php
use App\Http\Controllers\SponsorController;
use Illuminate\Support\Facades\Route;

Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors');

Route::get('/sponsors', [SponsorController::class, 'getall'])->name('sponsors');
Route::delete('/sponsors/delete/{id}', [sponsorController::class, 'delete'])->name('sponsors.delete');
Route::post('/sponsors/add', [sponsorController::class, 'add'])->name('sponsors.add');

