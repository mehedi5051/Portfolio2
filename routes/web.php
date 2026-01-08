<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/', function (){
//     return view ('frontend.pages.index');
// });


Route::get('/', [PageController::class, 'home']);
Route::get('/resume', [PageController::class, 'resume']);
Route::get('/project', [PageController::class, 'projects']);
Route::get('/contact', [PageController::class, 'contact']);





Route::get('/test', function (){
    return view ('backend.layout.app');
});