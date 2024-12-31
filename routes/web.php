<?php

use App\Http\Controllers\BarController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PkgController;
use App\Http\Controllers\UserController;
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

Route::get('/' , [ BarController::class, 'index'])->name('index');
Route::resource('/contacts', ContactController::class);

Route::get('/about', [BarController::class,  'about'])->name('about');
Route::get('/about-details', [BarController::class,  'showabout'])->name('showabout');
Route::get('/services', [BarController::class, 'services'])->name( 'services');
Route::get('/packages', [BarController::class, 'packages'])->name('packages');
Route::get('/pakage-details/{id}', [BarController::class, 'packageshow'])->name('more');
Route::get('/destination', [BarController::class, 'destination'])->name('destination');
Route::get('/booking', [BarController::class, 'booking'])->name('booking');
Route::get('/booked/{id}', [BarController::class, 'booked'])->name('booked');
Route::get('/contact', [BarController::class, 'contact'])->name('contact');
Route::resource('/feedbacks', FeedbackController::class);



Route::get('/login' , [MainController::class, 'showLoginForm'])->name('login');
Route::post('/login' , [MainController::class, 'login'])->name('checklogin');

// Admin Pannel Routes 
Route::middleware(['auth' , 'main'])->group( function(){
    // Route::get('/dashboard', function(){
    //     return view('admin/dashboard');
    // })->name('dashboard');
    Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');
    Route::post('/logout' , [MainController::class, 'logout'])->name('logout');
    Route::resource('book', BookController::class);
Route::resource('users' , UserController::class);
Route::resource('pkgs', PkgController::class);
});
