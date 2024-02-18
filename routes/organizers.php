<?php
use App\Http\Controllers\OrganizerController;
use Illuminate\Support\Facades\Route;

Route::get('/organizers', function () {
    return view('organizers');
})->name('organizers');

Route::get('/organizers', [OrganizerController::class, 'getall'])->name('organizers');
Route::delete('/organizers/delete/{id}', [organizerController::class, 'delete'])->name('organizers.delete');
Route::post('/organizers/add', [organizerController::class, 'add'])->name('organizers.add');

