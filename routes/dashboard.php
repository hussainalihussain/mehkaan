<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PermissionController;

Route::get('', DashboardController::class)->name('dashboard');

Route::resource('permissions', PermissionController::class);
