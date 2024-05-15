<?php

use App\Http\Controllers\TenistaController;
use App\Http\Controllers\TorneoController;
use App\Models\Torneo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'tenistas'], function () {
    Route::get('/', [TenistaController::class, 'index'])->name('tenistas.index');

});
Route::group(['prefix' => 'torneos'], function () {
    Route::get('/', [TorneoController::class, 'index'])->name('torneos.index');

});
