<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductRegistController;

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

//接続許可
//商品一覧画面
Route::get('/products', [ProductController::class, 'index']);
//商品詳細画面
Route::get('products/{productId}', [ProductDetailController::class, 'detail'])->name('product_detail');

//商品更新画面
 ///products/{productId}/update

 //商品登録画面表示
Route::get('products/register', [ProductRegistController::class, 'regist'])->name('product_regist');

//商品登録実行


 //商品検索

 //products/search

 //商品削除
///products/{:productId}/delete