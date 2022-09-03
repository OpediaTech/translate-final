<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PaymentController::class, 'index']);
// Route::post('/transaction', [PaymentController::class, 'makePayment'])->name('make-payment');


Route::get('/paypal-order', [PaymentController::class, 'get_order_data'])->name('get_order_data');
Route::get('/thank-you', [PaymentController::class, 'Thank'])->name('thank');

// Route::get('/email-send', [PaymentController::class, 'EmailSend'])->name('email');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/createitems', [HomeController::class, 'Create'])->name('create');
Route::post('/update-items/{id}', [HomeController::class, 'Update'])->name('update');
Route::get('/edit', [HomeController::class, 'Edit'])->name('edit');

