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
        $customer->customer_id=Auth::id();
        $customer->name=$name;
        $customer->address=$address;
        $customer->phone=$phone;
        $customer->email=$request->email;
     

        $dataCustomer=[
            'id'=>$customer->customer_id,
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
        if($method==1){
            $customers=DB::table('customer')->where('customer_id',Auth::id())->get();
           foreach($customers as $cus)
        
           if($cus){
            DB::table('customer')
            ->where('customer_id',Auth::id())
            ->update(
                ['name' => $name, 'email' => $request->email,'address'=>$address,'phone'=>$phone]
            );
             }else{
                DB::table('customer')->insert([
                    'id' => $customer->customer_id,
                    'name' => $customer->name,
                    'email'=>$customer->email,
                    'address'=>$customer->address,
                    'phone'=>$customer->phone
                ]);
             }

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
      
        $customer= new Customer();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->customer_id=Auth::id();
        $note=$request->note;
        $customer->phone=$request->phone;
        $oldCart = session('cart');
        $newCart = new Cart($oldCart);
        $product = $newCart->products;

        $customers=DB::table('customer')->where('customer_id',Auth::id())->get();
           foreach($customers as $cus)
        
           if($cus){
            DB::table('customer')
            ->where('customer_id',Auth::id())
            ->update(
                ['name' => $customer->name, 'email' => $request->email,'address'=>$customer->address,'phone'=>$customer->phone]
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
