

<?php
use App\Http\Controllers\KeynotespeakerController;
use Illuminate\Support\Facades\Route;

Route::get('/keynotespeakers', function () {
    return view('keynotespeakers');
})->name('keynotespeakers');

Route::get('/keynotespeakers', [KeynotespeakerController::class, 'getall'])->name('keynotespeakers');
Route::delete('/keynotespeakers/delete/{id}', [KeynotespeakerController::class, 'delete'])->name('keynotespeakers.delete');
Route::post('/keynotespeakers/add', [KeynotespeakerController::class, 'add'])->name('keynotespeakers.add');
