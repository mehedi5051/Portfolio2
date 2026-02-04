<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Models\HeroProperty;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HeroPropertyController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');   
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');   
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // logout 

    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');


    // Hero Property Route
    Route::get('home/heroproperty', [HeroPropertyController::class, 'index'])->name('heroproperties.index');
    Route::post('home/heroproperty', [HeroPropertyController::class, 'store'])->name('heroproperties.store');

    // about route
    Route::get('home/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('home/about', [AboutController::class, 'store'])->name('about.store');

    Route::resource('home/contact', ContactController::class)->only(['index',  'update', 'destroy', 'edit']);


});

require __DIR__.'/auth.php';

// Route::get('/', function (){
//     return view ('frontend.pages.index');
// });


Route::get('/', [PageController::class, 'home']);
Route::get('/resume', [PageController::class, 'resume']);
Route::get('/project', [PageController::class, 'projects']);
Route::get('/contact', [PageController::class, 'contact']);





