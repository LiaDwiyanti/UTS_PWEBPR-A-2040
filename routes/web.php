<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('new/login');
});

Route::get('/contact', function () {
    return view('new/contact');
});

Route::get('/contact', function () {
    return view('new/register');
});

Route::get('new/login', [ContactController::class, 'index']);
Route::get('/contact', [ContactController::class, 'cont'])->name('new.contact');
Route::get('/register', [ContactController::class, 'reg'])->name('new.register');