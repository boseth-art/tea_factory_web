<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Route
Route::get('/registration', function () {
    return view('registration');
});

// Protected Dashboard Route (only for logged-in users)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
