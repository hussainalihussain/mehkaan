<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function () {
    return view('dashboard.users.index');
});

Route::get('/settings', function () {
    return view('dashboard.settings.index');
});

Route::get('/sign-in', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/forgot-password-2', function () {
    return view('forgot-password');
});

Route::get('/reset-password-2', function () {
    return view('reset-password');
});

Route::get('/profile-lock-2', function () {
    return view('profile-lock');
});

Route::middleware(['auth', 'verified'])
    ->prefix('dashboard')
    ->as('dashboard.')
    ->group(function () {
        require(__DIR__ . '/dashboard.php');
    }
);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
