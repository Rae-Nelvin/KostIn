<?php

use App\Http\Controllers\Owner\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['isOwner']], function () {
    Route::prefix('owner/')->name('owner.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');
    });
});