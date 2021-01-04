<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
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
        if(!Auth::id()){
            return redirect()->route('user.getLogin');
        }
        $oldCart = session('cart');
            $newCart = new Cart($oldCart);
            $product = $newCart->products;
            
        return view('Customer.pages.delivery',compact('newCart','product'));
    }
    public function placeOrder(Request $request){
       
        
        $name=$request->name;
        $phone= $request->phone;
        $address=$request->address;
        $customer= new Customer();
        $customer->id=Auth::id();
        $customer->name=$name;
        $customer->address=$address;
        $customer->phone=$phone;
        $customer->email=$request->email;

        $dataCustomer=[
            'id'=>$customer->id,
            'name'=>$name,
            'address'=>$address,
            'phone'=>$phone,
            'email'=>$customer->email,
            'note'=>$request->note
        ];
        $oldCart = session('cart');
        $newCart = new Cart($oldCart);
        $product = $newCart->products;
   
        $method=$request->method;
        if($method==1){// tien mat
            $customer=Customer::find(Auth::id());
           if($customer->id){
            DB::table('customer')
            ->where('id',Auth::id())
            ->update(
                ['name' => $name, 'email' => $request->email,'address'=>$address,'phone'=>$phone]
            );
        }else $customer->save();

           $bill= new Bill();
           $bill->customer_id=Auth::id();
           $bill->quantity=$newCart->totalQuantity;
           $bill->date=date("Y/m/d");
           $bill->total=$newCart->totalPrice;
           $bill->note=$request->note;
          
           $bill->save();
            
           foreach($product as $pro):
           $billDetail= new BillDetail();
           $billDetail->bill_id=$bill->id;
           $billDetail->product_id=$pro['product']->id;
           $billDetail->img=$pro['product']->image;
           $billDetail->customer_id=Auth::id();
           $billDetail->price=$pro['price'];
           $billDetail->quantity=$pro['quantity'];
         
           $billDetail->save();
           endforeach;
           $request->session()->forget('cart');
           return redirect()->route('home.index');

        }else{
            return view('Customer.pages.paymentForm',compact('dataCustomer','product','newCart'));
        }

    }
    public function payment(Request $request){
      
        
        $name=$request->name;
      $email=$request->email;
       $address=$request->address;
        $note=$request->note;
      $phone=$request->phone;
        $oldCart = session('cart');
        $newCart = new Cart($oldCart);
        $product = $newCart->products;

            $customer=Customer::find(Auth::id());
           if($customer->id){
            DB::table('customer')
            ->where('id',Auth::id())
            ->update(
                ['name' => $name, 'email' => $email,'address'=>$address,'phone'=>$phone]
            );
        }else $customer->save();

           $bill= new Bill();
           $bill->customer_id=Auth::id();
           $bill->date=date("Y/m/d");
           $bill->quantity=$newCart->totalQuantity;
           $bill->total=$newCart->totalPrice;
           $bill->note=$note;
          
           $bill->save();
            
           foreach($product as $pro):
           $billDetail= new BillDetail();
           $billDetail->bill_id=$bill->id;
           $billDetail->product_id=$pro['product']->id;
           $billDetail->img=$pro['product']->image;
           $billDetail->customer_id=Auth::id();
           $billDetail->price=$pro['price'];
           $billDetail->quantity=$pro['quantity'];
         
           $billDetail->save();
           endforeach;
           $request->session()->forget('cart');
           return redirect()->route('home.index');

    }

}
