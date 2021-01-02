<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    //

    public function index(){
        if(session('cart')){
            $oldCart=session('cart');
            $cart= new Cart($oldCart);
            return view('Customer.pages.cart',compact('cart'));
        }else{
            return view('Customer.pages.cart');
        }
    }

    public function addToCart(Request $request){
        return redirect()->route('home.index');
        $oldCart= session('cart')? session('cart'): null;
        $cart= new Cart($oldCart);
        $cart->add($request);
        $request->session()->put('cart',$cart);
        $dataCart= session('cart');
        return redirect()->route('home.index');
    }
}
