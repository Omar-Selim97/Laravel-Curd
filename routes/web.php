<?php

use App\Http\Controllers\ComputersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticConroller ;
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

Route::get('/', [StaticConroller::class, 'homepage' ])->name('home.homepage');
Route::get('/about', [StaticConroller::class, 'about' ])->name('home.about');
Route::get('/portoflio', [StaticConroller::class, 'portofolio' ])->name('home.portofolio');
Route::get('/contact', [StaticConroller::class, 'contact' ] )->name('home.contact');
//Resource
Route::resource('computers',ComputersController::class);
