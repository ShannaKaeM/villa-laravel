<?php

use App\Http\Controllers\OwnerAuthController;
use App\Http\Controllers\OwnerDashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:owner')->group(function () {
    Route::get('/login', [OwnerAuthController::class, 'showLogin'])->name('owner.login');
    Route::post('/login', [OwnerAuthController::class, 'login']);
});

Route::middleware('auth:owner')->group(function () {
    Route::post('/logout', [OwnerAuthController::class, 'logout'])->name('owner.logout');
    Route::get('/dashboard', [OwnerDashboardController::class, 'dashboard'])->name('owner.dashboard');
    Route::get('/committee/{slug}', [OwnerDashboardController::class, 'showCommittee'])->name('owner.committee');
    Route::get('/projects', [OwnerDashboardController::class, 'projects'])->name('owner.projects');
    Route::get('/project/{id}', [OwnerDashboardController::class, 'showProject'])->name('owner.project');
});
