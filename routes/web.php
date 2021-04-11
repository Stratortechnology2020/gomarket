<?php
use App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;

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

Route::get('home', [Front::class,'home'])->name('home');
Route::get('register', [Front::class,'register'])->name('register');
Route::post('registerdata', [Front::class,'registerdata'])->name('registerdata');
Route::get('login', [Front::class,'login'])->name('login');
Route::post('logindata', [Front::class,'logindata'])->name('logindata');
Route::get('logout', [Front::class,'logout'])->name('logout');