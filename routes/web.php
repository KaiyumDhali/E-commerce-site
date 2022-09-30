<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerAuthController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/shop-page',[HomeController::class,'shopper'])->name('shop');
Route::get('/details-page',[HomeController::class,'details'])->name('details');
Route::get('/card-page',[HomeController::class,'card'])->name('card');
Route::get('/checkout-page',[HomeController::class,'checkout'])->name('checkout');
Route::get('/blogDetails-page',[HomeController::class,'blogDetails'])->name('blog.details');
Route::get('/blogMain-page',[HomeController::class,'blogMain'])->name('blog.main');
Route::get('/contact-page',[HomeController::class,'contact'])->name('contact');





Route::get('/login-custom',[CustomerAuthController::class,'loginCustom'])->name('login.custom');
Route::post('/login-customer', [CustomerAuthController::class,'loginCheck'])->name('login.customer');
Route::get('/logout-customer', [CustomerAuthController::class,'customLogout'])->name('logout.customer');
Route::get('/register-customer',[CustomerAuthController::class,'registration'])->name('register.custom');
Route::post('/register-custom',[CustomerAuthController::class,'registrationCustom'])->name('register.customer');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
