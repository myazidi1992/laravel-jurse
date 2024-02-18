

<?php
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/photos', function () {
    return view('photos');
})->name('photos');

Route::get('/photos', [PhotoController::class, 'getall'])->name('photos');
Route::delete('/photos/delete/{id}', [photoController::class, 'delete'])->name('photos.delete');
Route::post('/photos/add', [photoController::class, 'add'])->name('photos.add');
