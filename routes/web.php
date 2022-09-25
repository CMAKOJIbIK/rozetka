<?php



use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\ProductController;
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/add_product', [ProductController::class, 'add_product'])->name('add_product');
Route::post('/create_product', [ProductController::class, 'create_product'])->name('create_product');
Route::get('/update_product', [ProductController::class, 'update_product'])->name('update_product');
Route::post('/ajax_update_product', [ProductController::class, 'ajax_update_product'])->name('ajax_update_product');



