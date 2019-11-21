<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function addToCart(Request $request) {
        $product = product::find($request->id);

        Cart::add([
           'id'     => $request->id,
           'name'   => $product->product_name,
           'price'  => $product->product_price,
           'qty'    => $request->qty,
           'weight' => 550,
           'option' => [
               'image' => $request->product_image
           ]
        ]);

        return redirect('/cart/show');
    }

    public function showCart() {
        $cartProducts = Cart::content();
        return view('front-end.cart.show-cart', ['cartProducts'=>$cartProducts]);
    }

    public function deleteCart($id) {
        Cart::remove($id);
        return redirect('/cart/show');
    }

    public function updateCart(Request $request) {
        Cart::update($request->rowId, $request->qty);
        return redirect('/cart/show');
    }
}
