<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $customer;
    public function __construct(Customer $customer){
        $this->customer=$customer;
    }
   
    public function index()
    {
        $customers= $this->customer->paginate(10);
        return view('Admin.pages.customer.index',compact($customers));
    }  
    public function getLogin(){
        return view('login');
    }
    public function postAddCustomer(Request $request){
        $customer= new Customer();
        $customer->username=$request->username;
        $customer->password=($request->password);
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->role=$request->role;
        $customer->phone=$request->phone;
        $customer->save();
        return redirect()->route('customer.getListCustomer');
    }
    public function getListCustomer(){
        $customers=$this->customer->paginate(10);
        return view('Admin.pages.customer.index',compact('customers'));
    }
    public function getRegister(){
        return view('signup');
    }

    public function postRegister(Request $request){
        $customer= new Customer();
        $customer->username=$request->username;
        $customer->password=($request->password);
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->role=1;
        $customer->phone=$request->phone;    
        $customer->save();
        return redirect()->route('customer.getLogin');

    }
    public function getHome(){
        return view('Customer.pages.home');
    }
    public function postLogin(Request $request){
        $this->validate($request,
        [
            'username'=>'required',
            'password'=>'required'
        ],
        [
            'username.required'=>"Vui lòng nhập username",
            'password.required'=>"Vui lòng nhập password"

        ]

        );
        $username=$request->username;
        $password=$request->password;
        $data=array('username'=>$request->username,'password'=>$request->password);
        if(Auth::attempt($data)){
            return redirect()->route('customer.getHome');
        }
        else{
            return redirect()->back()->with('thong bao','Dang nhap khong  thanh cong ');
        }
    }
        
        


    


}
