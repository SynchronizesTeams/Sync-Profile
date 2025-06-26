<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/register');
Route::get('/{username}', [ProfileController::class, 'show'])
    ->where('username', '^(?!login|register|dashboard|profile).*$');


Route::get('/login', function () {
    return view('auth/login');
});
Route::post('/logins', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/register', [AuthController::class, 'showRegisterForm']);

Route::post('/registers', [AuthController::class, 'register']);

Route::get('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth')->name('profile.edit');

Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->middleware('auth')->name('profile.update');
