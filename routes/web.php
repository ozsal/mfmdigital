<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

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

// frontend routes

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/home', [FrontendController::class, 'home'])->name('home');
Route::get('/blueprint', [FrontendController::class, 'blueprint'])->name('blueprint');
Route::get('/catalog', [FrontendController::class, 'catalog'])->name('catalog');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/payment', [FrontendController::class, 'payment'])->name('payment');
Route::get('/user-login', [FrontendController::class, 'userLogin'])->name('front-login');
Route::get('/user-register', [FrontendController::class, 'userRegister'])->name('front-register');

Auth::routes();

//backend routes
