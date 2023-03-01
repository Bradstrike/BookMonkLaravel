<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
// Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('welcome', [AuthController::class, 'welcome']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', 'App\Http\Controllers\BookController@index')->name('home');


Route::get('/product/{id}', 'App\Http\Controllers\BookController@product')->name('product');
Route::get('/payment/{id}', 'App\Http\Controllers\PaymentController@index')->name('payment');

Route::get('/basket', 'App\Http\Controllers\BasketController@index')->name('basket');
Route::get('/basket/add/{id}', 'App\Http\Controllers\BasketController@add')->name('basket.add');
Route::get('/basket/remove/{id}', 'App\Http\Controllers\BasketController@remove')->name('basket.remove');
Route::post('/basket/payment', 'App\Http\Controllers\PaymentController@payment')->name('basket.payment');