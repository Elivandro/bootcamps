<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\PasswordResetLinkController;

Route::middleware('guest')->group(function () {
    Route::get('password-recovery', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('password-recovery', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});