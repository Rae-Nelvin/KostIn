<?php

use App\Http\Controllers\Owner\DashboardController;
use App\Http\Controllers\Owner\KostController;
use App\Http\Controllers\Owner\TransactionController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['isOwner']], function () {
    Route::prefix('owner/')->name('owner.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/add-kost', [KostController::class, 'create'])->name('add-kost');
        Route::post('/add-kost', [KostController::class, 'store']);
        Route::get('/detail-kost/{id}', [KostController::class, 'detail'])->name('detail-kost');
        Route::get('/update-kost/{id}', [KostController::class, 'update'])->name('update-kost');
        Route::post('/update-kost', [KostController::class, 'storeUpdate']);
        Route::get('/delete-kost/{id}', [KostController::class, 'delete'])->name('delete-kost');
        Route::get('/image-kost/{id}', [KostController::class, 'createPictures'])->name('image-kost');
        Route::post('/image-kost/add', [KostController::class, 'storePictures']);
        Route::get('/image-delete/{id}', [KostController::class, 'deletePicture'])->name('delete-picture');
        Route::get('/manage-transactions', [TransactionController::class, 'index'])->name('manage-transactions');
        Route::get('/accept-transaction/{id}', [TransactionController::class, 'accept'])->name('accept-transaction');
        Route::get('/reject-transaction/{id}', [TransactionController::class, 'reject'])->name('reject-transaction');
    });
});