<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $products=null;
    public $productPrice=0;
    public $totalQty=0;
    public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->itemPrice = $oldCart->itemPrice;
			$this->totalQty = $oldCart->totalQty;
		}
	}


	public function add($product){
        
        $id = $product->cart_id;
        $amount = $product->cart_amount;
        $productPrice = $product->productPrice;
        
        // dd($amount);
        $giohang = ['qty'=>0, 'id' => $id];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $giohang = $this->products[$id];
            }
        }
        $giohang['qty'] += $amount;
        $this->totalQty += $amount;
        $this->productPrice = $productPrice;
        $this->products[$id] = $giohang;
    }
}
