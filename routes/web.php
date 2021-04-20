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

Route::get('/', [Front::class,'home'])->name('home');
Route::get('register', [Front::class,'register'])->name('register');
Route::post('registerdata', [Front::class,'registerdata'])->name('registerdata');
Route::get('login', [Front::class,'login'])->name('login');
Route::post('logindata', [Front::class,'logindata'])->name('logindata');
Route::get('logout', [Front::class,'logout'])->name('logout');

Route::get('grocerystore', [Front::class,'grocerystore'])->name('grocerystore');
Route::get('myaddress', [Front::class,'myaddress'])->name('myaddress');
Route::get('address', [Front::class,'address'])->name('address');
Route::post('adduseraddress', [Front::class,'adduseraddress'])->name('adduseraddress');
Route::get('editaddress/{id}', [Front::class,'editaddress'])->name('editaddress');
Route::post('updateuseraddress', [Front::class,'updateuseraddress'])->name('updateuseraddress');
Route::get('deleteaddress/{id}', [Front::class,'deleteaddress'])->name('deleteaddress');
Route::get('product_detail/{id}', [Front::class,'product_detail'])->name('product_detail');

Route::get('cart', [Front::class,'cart'])->name('cart');
Route::get('checkout', [Front::class,'checkout'])->name('checkout');
Route::post('addtobag', [Front::class,'addtobag'])->name('addtobag');
Route::post('removecartitem', [Front::class,'removecartitem'])->name('removecartitem');
Route::post('selectaddress', [Front::class,'selectaddress'])->name('selectaddress');
  