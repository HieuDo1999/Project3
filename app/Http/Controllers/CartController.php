<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    //

    public function index()
    {

        if (session('cart') != null) {
            $oldCart = session('cart');
            $newCart = new Cart($oldCart);
            $product = $newCart->products;
            return view('Customer.pages.cart', compact('newCart', 'product'));
        } else {
            return view('Customer.pages.cart');
        }
    }

    public function addToCart(Request $request)
    {

        $product_id = $request->product_id;

        $quantity = $request->quantity;
        $product = DB::table('products')->where('id', $product_id)->first();

        $oldCart = session('cart') ? session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->add($product, $quantity);
        $request->session()->put('cart', $newCart);
        $product = $newCart->products;


        return view('Customer.pages.cart', compact('newCart', 'product'));
    }
    public function removeProductCart(Request $request, $id)
    {

        $oldCart = session('cart') ? session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->removeProduct($id);
        if (Count($newCart->products) > 0) {
            $request->session()->put('cart', $newCart);
            $product = $newCart->products;
            return view('Customer.pages.cart', compact('newCart', 'product'));
        } else {
            $request->session()->forget('cart');
        }
        return view('Customer.pages.cart');
    }
    public function SaveCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;

        $oldCart = session('cart') ? session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateQuantity($id, $quantity);
        $request->session()->put('cart', $newCart);
        $product = $newCart->products;

        return view('Customer.pages.cart', compact('newCart', 'product'));
    }
    
}
