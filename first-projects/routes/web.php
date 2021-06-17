<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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


Route::get('products/about', [ProductsController::class, 'about']);

Route::get(
	'/products',
	'App\Http\Controllers\ProductsController@index'
)->name('products');

//→whereでrouteで渡すパラメーターに制限をかける
//pattern interger
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

//pattern string
Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');


//pattern multi
Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
	'name' => '[a-z]+',
	'id' => '[0-9]+'
]);
