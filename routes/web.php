<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
// require __DIR__.'/admin.php';
// require __DIR__.'/owner.php';
// require __DIR__.'/user.php';

// Pages
Route::get('/', function () {
    return view('index');
});

Route::get('/area', function () {
    return view('area');
});

Route::get('/kampus', function () {
    return view('kampus');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/detail', function () {
    return view('detail');
});

// For User, Owner, and Admin
Route::get('/manage-profile', function () {
    return view('manage-profile');
});

// For User, Owner, and Admin
// Yang bedain cuma kalo User cuma bisa liat list transaksi yang dia buat
// Kalo Owner cuma bisa liat list transaksi yang ngarah ke kos yang dia punya
// Kalo Admin bisa liat semua transaksi yang terjadi
// Sengaja ga ngasi action, takut ga cukup waktu
Route::get('/manage-transaction', function () {
    return view('manage-transaction');
});

// For Owner and Admin
// Owner bisa liat semua kos yang dia punya + nambahin data kos
// Admin bisa liat semua kos yang ada dan ga bisa nambahin data kos
Route::get('/manage-kos', function () {
    return view('manage-kos');
});

// For Owner
Route::get('/tambah-kos', function () {
    return view('tambah-kos');
});

// For Owner
Route::get('/edit-kos', function () {
    return view('edit-kos');
});

// For Owner and Admin
Route::get('/detail-kos', function () {
    return view('detail-kos');
});
