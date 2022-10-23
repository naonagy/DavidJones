<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClproductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

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
/*
Route::get('/', function () {
    return view('index');
})->name('master');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'isAdmin'])->name('dashboard');
*/
require __DIR__.'/auth.php';

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');
    Route::resource("products", ProductController::class);
    Route::resource("orders", OrderController::class);
    Route::resource("customers", UserController::class);

});

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/', function () {
        return view('index');
    })->name('master');

    Route::resource("produse", ClproductController::class);
    Route::get('produse/categorie/{category}', [ClproductController::class,'categorie'])
    ->whereIn('category', ['genti', 'rucsacuri', 'portofele'])
    ->name('category');
    
    Route::resource("shoppingCart", CartController::class);
    Route::post('shoppingCart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::post('removeCart', [CartController::class, 'removeCart'])->name('removeCart');
    Route::post('shoppingCart/checkout', [CartController::class, 'checkout'])->name('checkout');
});






