<?php

use App\Http\Controllers\{AdminProfileController, ProfileController, HomeController, WebviewProfileController, FrontendController, FrontendProfileController};
use Illuminate\Support\Facades\Route;


// Frontend Routes
Route::get('/', [FrontendController::class, 'index' ])->name('index');
// Frontend Routes

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

    // Webview Profile
    // Route::get('/admin/webview_profile/create', [WebviewProfileController::class, 'webviewProfile'])->name('admin.webview_profile.create');
    // Route::post('/admin/webview_profile/store_profile', [WebviewProfileController::class, 'store_profile'])->name('admin.webview_profile.store_profile');

    Route::get('admin/frontend_profile/view', [FrontendProfileController::class, 'index'])->name('admin.frontend_profile.view');
    Route::get('admin/frontend_profile/create', [FrontendProfileController::class, 'create'])->name('admin.frontend_profile.create');
    Route::post('admin/frontend_profile/store', [FrontendProfileController::class, 'store'])->name('admin.frontend_profile.store');

});
// User Type = Admin

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

require __DIR__.'/auth.php';
