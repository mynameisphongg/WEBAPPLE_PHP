<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Thêm sản phẩm vào giỏ hàng
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $image = $request->image;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                "name" => $name,
                "price" => $price,
                "image" => $image,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'message' => 'Sản phẩm đã được thêm vào giỏ hàng!',
            'cart' => $cart
        ]);
    }

    // Lấy danh sách giỏ hàng
    public function getCart()
    {
        $cart = session()->get('cart', []);
        return response()->json(['cart' => $cart]);
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return response()->json(['message' => 'Sản phẩm đã được xóa khỏi giỏ hàng!', 'cart' => $cart]);
    }
}
