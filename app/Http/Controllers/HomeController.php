<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $category = Category::orderBy('category_id', 'DESC')->paginate(20);
        $product = Product::orderBy('id', 'DESC')->paginate(20);
        return view('Customer.pages.home',compact('category','product'));

    }
}
