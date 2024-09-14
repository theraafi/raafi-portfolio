<?php

use App\Http\Controllers\{AdminProfileController, ProfileController, HomeController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User Type = Admin
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'home'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminProfileController::class, 'editProfile'])->name('admin.profile.edit');
    Route::post('/admin/profile/imageUpload/{id}', [AdminProfileController::class, 'imageUpload'])->name('admin.profile.imageUpload');
});
// User Type = Admin

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

require __DIR__.'/auth.php';
