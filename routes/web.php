<?php

use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('page.home');
})->name('home');

// Halaman About
Route::get('/about', function () {
    return view('page.about');
})->name('about');

// Halaman Profile
Route::get('/profile', [MahasiswaController::class, 'index'])->name('profile');

// Halaman Project (Public)
Route::get('/project', [ProjectController::class, 'index'])->name('projects');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::prefix('admin')->group(function () {

    // Route Dashboard Admin
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.dashboard');

    // CRUD Projects
    Route::resource('projects', AdminProjectController::class);

    // Logout
    Route::get('/logout', function () {
        return redirect()->route('home');
    })->name('logout');

});
