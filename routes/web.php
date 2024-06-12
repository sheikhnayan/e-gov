<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use Spatie\LaravelPdf\Facades\Pdf;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('pdf/{id}', function ($id) {
    $data = User::find($id);


    return view('pdf', compact('data'));
});

Route::get('data/{id}', function ($id) {
    $data = User::find($id);


    return view('data', compact('data'));
});



Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('/index-en', [FrontendController::class, 'index_en'])->name('index.en');
Route::get('/form1-ru', [FrontendController::class, 'form1_ru'])->name('form1.ru');
Route::get('/form1-en', [FrontendController::class, 'form1_en'])->name('form1.en');
Route::get('/form2-ru', [FrontendController::class, 'form2_ru'])->name('form2.ru');
Route::get('/form2-en', [FrontendController::class, 'form2_en'])->name('form2.en');
Route::get('/form3-ru', [FrontendController::class, 'form3_ru'])->name('form3.ru');
Route::get('/form3-en', [FrontendController::class, 'form3_en'])->name('form3.en');
Route::get('/form4', [FrontendController::class, 'form4'])->name('form4');

Route::get('/dashboard', function () {
    if (Auth::user()->type == 'admin') {
        # code...
        $data = User::where('type','employee')->latest()->get();
        return view('admin.dashboard',compact('data'));
    }else {
        return back();
    }
})->middleware(['auth'])->name('dashboard');

Route::get('/employee/{id}', function ($id) {
    $data = User::find($id);

    return view('admin.employee',compact('data'));
})->middleware(['auth'])->name('employee');
Route::post('/employee/{id}/update', [EmployeeController::class, 'update'])->name('employee-update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
