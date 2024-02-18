

<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/pages', function () {
    return view('pages');
})->name('pages');

Route::get('/pages', [PageController::class, 'getall'])->name('pages');
Route::delete('/pages/delete/{id}', [pageController::class, 'delete'])->name('pages.delete');
Route::post('/pages/add', [pageController::class, 'add'])->name('pages.add');
