<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClproductController;
use App\Http\Controllers\GentiController;
use App\Http\Controllers\RucsacuriController;
use App\Http\Controllers\PortofeleController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

Route::get('/', function () {
    return view('index');
})->name('master');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource("products", ProductController::class);

Route::resource("produse", ClproductController::class);
Route::get('produse/categorie/{category}', [ClproductController::class,'genti']);


Route::resource('genti', GentiController::class);
Route::resource('rucsacuri', RucsacuriController::class);
Route::resource('portofele', PortofeleController::class);

Route::resource("orders", OrderController::class);
//Route::resource("orders/{order}", OrderlineController::class);

Route::resource("customers", UserController::class);


Route::get('/shoppingCart', function () {
    return view('clientside.shoppingCart');
})->name('shoppingCart');
