<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/transactions', [ProfileController::class, 'transactions'])->name('profile.transactions');
    Route::get('/payments', [ProfileController::class, 'payments'])->name('profile.payments');
    Route::get('/cards', [ProfileController::class, 'cards'])->name('profile.cards');
    Route::get('/account', [ProfileController::class, 'account'])->name('profile.account');

});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['auth','admin'])->name('admin.index');
