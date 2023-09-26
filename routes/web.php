<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\ContactController::class, 'show']);

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'sendEmail']);

Route::get('/donate', [\App\Http\Controllers\PaymentController::class, 'donate']);
Route::post('pay', [\App\Http\Controllers\PaymentController::class, 'pay'])->name('payment');
Route::get('success', [\App\Http\Controllers\PaymentController::class, 'success']);
Route::get('error', [\App\Http\Controllers\PaymentController::class, 'error']);
