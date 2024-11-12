<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Register routes for modal registration
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');

// Login routes
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// Authenticated routes (user is logged in)
Route::middleware('auth')->group(function () {
    Route::get('/my-account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/edit', [AccountController::class, 'edit'])->name('account.edit');
    Route::put('/account/update', [AccountController::class, 'update'])->name('account.update');
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Logout route
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('home');
    })->name('logout');
    
    // Dashboard route, only available after email verification
    Route::middleware('verified')->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Search route
Route::get('/search', [SearchController::class, 'index'])->name('search');

require __DIR__.'/auth.php';
