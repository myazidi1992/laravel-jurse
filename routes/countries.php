<?php
use App\Http\Controllers\CountrieController;
use Illuminate\Support\Facades\Route;

Route::get('/countries', function () {
    return view('countries');
})->name('countries');

Route::get('/countries', [CountrieController::class, 'getall'])->name('countries');
Route::delete('/countries/delete/{id}', [countrieController::class, 'delete'])->name('countries.delete');
Route::post('/countries/add', [countrieController::class, 'add'])->name('countries.add');

