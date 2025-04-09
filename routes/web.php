<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::name('messages.')->group(function() {
    Route::get('/',[MessageController::class, 'index'])->name('index');
    Route::post('/',[MessageController::class, 'store'])->name('store');
});
