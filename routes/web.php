<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CryptoWalletController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/transactions', [ProfileController::class, 'transactions'])->name('profile.transactions');
    Route::get('/payments', [ProfileController::class, 'payments'])->name('profile.payments');
    Route::get('/cards', [ProfileController::class, 'cards'])->name('profile.cards');
    Route::get('/accounts', [ProfileController::class, 'account'])->name('profile.account');


    Route::get('/fund-account', [ProfileController::class, 'fund'])->name('profile.fund');
    Route::get('/send-funds', [ProfileController::class, 'sendFunds'])->name('profile.sendFunds');

    Route::get('/crypto-wallets/create', [CryptoWalletController::class, 'create'])->name('crypto_wallets.create');
    Route::post('/crypto-wallets', [CryptoWalletController::class, 'store'])->name('crypto_wallets.store');
    Route::get('/crypto-wallets/{id}', [CryptoWalletController::class, 'show'])->name('crypto_wallets.show');


});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['auth','admin'])->name('admin.index');
