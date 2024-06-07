<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TenistaController;
use App\Http\Controllers\TorneoController;
use App\Http\Middleware\AdminVerified;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::delete('participantes/{id}', [ParticipanteController::class, 'destroy'])->name('participantes.destroy');


Route::group(['prefix' => 'torneos'], function () {
    Route::get('/{id}/add-participante', [TorneoController::class, 'showAddParticipanteForm'])
        ->name('torneos.showAddParticipanteForm');
    Route::post('/{id}/add-participante', [TorneoController::class, 'addParticipante'])
        ->name('torneos.addParticipante');

    Route::get('/', [TorneoController::class, 'index'])->name('torneos.index');
    Route::get('/create', [TorneoController::class, 'create'])->name('torneos.create')->middleware('auth', AdminVerified::class);;
    Route::post('/', [TorneoController::class, 'store'])->name('torneos.store')->middleware('auth', AdminVerified::class);;
    Route::get('/{id}/edit', [TorneoController::class, 'edit'])->name('torneos.edit')->middleware('auth', AdminVerified::class);;
    Route::put('/{id}', [TorneoController::class, 'update'])->name('torneos.update')->middleware('auth', AdminVerified::class);;
    Route::delete('/{id}', [TorneoController::class, 'destroy'])->name('torneos.destroy')->middleware('auth', AdminVerified::class);;
    Route::get('/{id}', [TorneoController::class, 'show'])->name('torneos.show');
    Route::delete('/torneos/{torneo}/eliminar-participante/{participante}', [TorneoController::class, 'eliminarParticipante'])->name('torneos.eliminar_participante')->middleware('auth', AdminVerified::class);;


});

Route::group(['prefix' => 'tenistas'], function () {
    Route::get('/create', [TenistaController::class, 'create'])->name('tenistas.create')->middleware('auth', AdminVerified::class);
    Route::post('/', [TenistaController::class, 'store'])->name('tenistas.store')->middleware('auth', AdminVerified::class);;
    Route::get('/{id}', [TenistaController::class, 'show'])->name('tenistas.show');
    Route::get('/{id}/edit', [TenistaController::class, 'edit'])->name('tenistas.edit')->middleware('auth', AdminVerified::class);;
    Route::put('/{id}', [TenistaController::class, 'update'])->name('tenistas.update')->middleware('auth', AdminVerified::class);;
    Route::delete('/{id}', [TenistaController::class, 'destroy'])->name('tenistas.destroy')->middleware('auth', AdminVerified::class);;
    Route::get('/', [TenistaController::class, 'index'])->name('tenistas.index');
    Route::get('generate-pdf/{id}', [TenistaController::class, 'generatePDF'])->name('generate-pdf');
});

require __DIR__ . '/auth.php';
