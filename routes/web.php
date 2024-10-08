<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/registration', [AuthController::class, 'registration'])->name('register');
Route::post('/registration', [AuthController::class, 'registrationPost'])->name('registerPost');

Route::get('/login', [AuthController::class, 'login'])->name('logged');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loggedPost');

Route::get('/navbar', [AuthController::class, 'navbar'])->name('navbar');

Route::get('/home', [AuthController::class, 'home'])->name('home');

Route::get('/about', [AuthController::class, 'about'])->name('about');

Route::get('/products', [AuthController::class, 'showProducts'])->name('showProducts');

Route::get('/cart', [AuthController::class, 'viewCart'])->name('cart');
//Route::post('/add-to-cart', [AuthController::class, 'addToCart'])->name('add.to.cart');