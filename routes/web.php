<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');


Route::get('/payment', [PaymentController::class, 'index']);
Route::get('/payment/success', [PaymentController::class, 'success']);
Route::get('/payment/fail', [PaymentController::class, 'fail']);
Route::get('/payment/pending', [PaymentController::class, 'pending']);
