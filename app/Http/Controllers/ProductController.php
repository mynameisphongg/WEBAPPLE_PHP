<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Lấy danh sách tất cả sản phẩm
    public function index() {
        return response()->json(Product::all(), 200);
    }

    // Thêm sản phẩm mới
    public function store(Request $request) {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    // Lấy thông tin sản phẩm theo ID
    public function show($id) {
        return response()->json(Product::find($id));
    }

    // Cập nhật thông tin sản phẩm
    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    // Xóa sản phẩm
    public function destroy($id) {
        Product::destroy($id);
        return response()->json(['message' => 'Product deleted']);
    }
}
