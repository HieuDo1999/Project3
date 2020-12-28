<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    use HasFactory;
    protected $table="bill_detail"; 
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function bill(){
        return $this->belongsTo('App\Bill','bill_id','id');
    }
}
