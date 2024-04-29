<?php

use App\Http\Controllers\IntakeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('intake.index');
})->name('home');

Route::get('/thanks', function () {
    return view('intake.thanks');
})->name('intake.thanks');

Route::post('/intake', IntakeController::class)->name('intake');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/customers');
});
