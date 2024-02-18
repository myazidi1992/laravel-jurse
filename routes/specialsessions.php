<?php
use App\Http\Controllers\SpecialsessionController;
use Illuminate\Support\Facades\Route;

Route::get('/specialsessions', function () {
    return view('specialsessions');
})->name('specialsessions');

Route::get('/specialsessions', [SpecialsessionController::class, 'getall'])->name('specialsessions');
Route::delete('/specialsessions/delete/{id}', [specialsessionController::class, 'delete'])->name('specialsessions.delete');
Route::post('/specialsessions/add', [specialsessionController::class, 'add'])->name('specialsessions.add');

