<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['isAdmin']], function () {
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/manage-requests', [RequestController::class, 'index'])->name('manage-requests');
        Route::get('/request-detail/{id}', [RequestController::class, 'detail'])->name('request-detail');
        Route::get('/accept-request/{id}', [RequestController::class, 'accept'])->name('accept-request');
        Route::get('/manage-transactions', [TransactionController::class, 'index'])->name('manage-transactions');
        Route::get('/manage-users', [UserController::class, 'index'])->name('manage-users');
        Route::get('/delete-user/{id}', [UserController::class, 'delete'])->name('delete-user');
    });
});