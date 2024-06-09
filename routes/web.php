<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('/index-en', [FrontendController::class, 'index_en'])->name('index.en');
Route::get('/form1-ru', [FrontendController::class, 'form1_ru'])->name('form1.ru');
Route::get('/form1-en', [FrontendController::class, 'form1_en'])->name('form1.en');
Route::get('/form2-ru', [FrontendController::class, 'form2_ru'])->name('form2.ru');
Route::get('/form2-en', [FrontendController::class, 'form2_en'])->name('form2.en');

Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
