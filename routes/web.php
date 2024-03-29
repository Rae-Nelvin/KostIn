<?php

use App\Http\Controllers\Guest\GuestController;
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

// Pages
Route::get('/', [GuestController::class, 'index'])->name('welcome');
Route::get('/kost-detail/{id}', [GuestController::class, 'detail'])->name('kost-detail');
Route::get('/area', [GuestController::class, 'area'])->name('area');
Route::post('/search', [GuestController::class, 'search'])->name('search');
Route::get('/manage-profile', [ProfileController::class, 'create'])->middleware('auth')->name('manage-profile');
Route::post('/manage-profile', [ProfileController::class, 'store'])->middleware('auth');

Route::get('/area-kos', function () {
    return view('area-kos');
});

Route::get('/kampus', function () {
    return view('kampus');
});

Route::get('/about', function () {
    return view('about');
});

// Bisa booking kalo udh login, kalo blom lempar ke halaman login

// For User
Route::get('/req-owner', function () {
    return view('req-owner');
});

// Contoh Penggunaan Modal
Route::get('/modal', function () {
    return view('contoh-modal');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/owner.php';
require __DIR__.'/user.php';
