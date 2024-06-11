<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\FunctionalController;
use App\Http\Controllers\Admin\IndustrialController;
use App\Http\Controllers\Admin\SpecialController;
use App\Http\Controllers\Admin\PostTypeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\employer\DashboardController as EmployerDashboardController;
use App\Http\Controllers\employer\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Applicant;
use App\Http\Middleware\Employer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('jobentry.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware([Admin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('settings', SettingController::class);
    Route::resource('functional', FunctionalController::class);
    Route::resource('industrial', IndustrialController::class);
    Route::resource('special', SpecialController::class);
    Route::resource('post_type', PostTypeController::class);
    Route::resource('country', CountryController::class);
    Route::resource('state', StateController::class);
});
Route::middleware([Employer::class])->prefix('employer')->group(function () {
    Route::get('/dashboard', [EmployerDashboardController::class, 'index'])->name('employer.dashboard');
    Route::resource('posts', PostController::class);
});
Route::middleware([Applicant::class])->prefix('applicant')->group(function () {
   
});

require __DIR__.'/auth.php';
