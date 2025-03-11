<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route kiểm tra thông tin người dùng (cần auth)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route API cho sản phẩm
Route::apiResource('products', ProductController::class);

Route::post('/cart/add', [CartController::class, 'addToCart']);  // Thêm sản phẩm
Route::get('/cart', [CartController::class, 'getCart']);         // Lấy giỏ hàng
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart']); // Xóa sản phẩm