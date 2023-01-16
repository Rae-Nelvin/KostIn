<?php

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\RequestController;
use App\Http\Controllers\User\TransactionController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['isUser']], function () {
    Route::prefix('user/')->name('user.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/store/kost', [TransactionController::class, 'store']);
        Route::get('/manage-transactions', [TransactionController::class, 'index'])->name('manage-transactions');
        Route::post('/pay-transaction', [TransactionController::class, 'submitBuktiBayar']);
        Route::get('/delete-transaction/{id}', [TransactionController::class, 'delete'])->name('delete-transaction');
        Route::get('/become-owner', [RequestController::class, 'create'])->name('become-owner');
        Route::post('/become-owner', [RequestController::class, 'store']);
    });
});