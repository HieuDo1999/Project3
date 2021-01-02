<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = Product::orderBy('id', 'DESC')->get();
        $user=$request->session()->get('user');
        if($user=="2"){
            return view('Admin.pages.product.index', compact('product'));
        }else{
           
            return view('Customer.pages.home', compact('product'));
        }
    }

    public function getListProductByCategoryId($id,Request $request){
        $product = DB::table('products')->where('category_id',$id)->get();
        $category = Category::orderBy('category_id', 'DESC')->paginate(20);
        return view('Customer.pages.category', compact('product','category'));
        
    }
    public function getProductDetail($id, Request $request){
        $product = DB::table('products')->join('category','products.category_id','=','category.category_id')->where('id',$id)->get();
        $category = Category::orderBy('category_id', 'DESC')->paginate(20);
        $user=$request->session()->get('user');
        if($user=="2"){
            return view('Admin.pages.product.view',compact('product','category'));
        }else{
            
            return view('Customer.pages.productDetail', compact('product','category'));
        }
    }
   

    public function getAdd(){
        return view('Admin.pages.product.add');

    }
    public function postAdd(Request $request){
        $product= new Product();
        $product->id=$request->product_id;
        $product->name=$request->product_name;
        $product->category_id=$request->category;
        $product->price=$request->price;
        $product->image=basename($_FILES["img"]["name"]);
        $product->description=$request->description;
        $product->save();
        return redirect()->route('product.getListProduct');

        
    }
    public function delete($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect()->route('product.getListProduct');
    }
    public function edit(Request $request){
      
       
        DB::table('products')
        ->where('id', $request->id)
        ->update(
            ['name' => $request->name]
        ); 
        DB::table('products')
        ->where('id', $request->id)
        ->update(
            ['price' => $request->price]
        );
       
        DB::table('products')
        ->where('id', $request->id)
        ->update(
            ['category_id' => $request->category_id]
        );
        DB::table('products')
        ->where('id', $request->id)
        ->update(
            ['description' => $request->description]
        );
        
            return redirect()->route('product.getListProduct');
       
    }
    public function viewProductByName(Request $request){
        $product = DB::table('products')->where('name','like','%'.$request->name.'%')->get();
        $user=$request->session()->get('user');
        if($user==2){
        return view('Admin.pages.product.index',compact('product'));
        }else{
            return view('Customer.pages.category',compact('product'));
        }

    }
    


  
}
