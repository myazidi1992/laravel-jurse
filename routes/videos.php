

<?php
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/videos', [VideoController::class, 'getall'])->name('videos');
Route::delete('/videos/delete/{id}', [videoController::class, 'delete'])->name('videos.delete');
Route::post('/videos/add', [videoController::class, 'add'])->name('videos.add');
