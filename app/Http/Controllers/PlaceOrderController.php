<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class PlaceOrderController extends Controller
{
    //
    public function paymentForm(){
        
            $oldCart = session('cart');
            $newCart = new Cart($oldCart);
            $product = $newCart->products;
        return view('Customer.pages.paymentForm',compact('newCart','product'));
    }
    public function deliveryForm(){
        $oldCart = session('cart');
            $newCart = new Cart($oldCart);
            $product = $newCart->products;
            
        return view('Customer.pages.delivery',compact('newCart','product'));
    }
    public function payment(Request $request){
        $name=$request->name;
        $phone= $request->phone;
        $address=$request->address;
        
        $oldCart = session('cart');
        $newCart = new Cart($oldCart);
        $product = $newCart->products;

        $method=$request->method;
        if($method==1){// tien mat
            dd(((Auth::id())));


        }

    }

}
