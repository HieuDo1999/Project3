<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BillController extends Controller
{
    public function detail($id){
        
       $detail= DB::table('bill_detail')->where('bill_id',$id)->get();
       return view('Admin.pages.customer.billDetail',compact('detail'));
    }
}
