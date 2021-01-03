<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $products=null;
    public $totalPrice=0;
    public $totalQuantity=0;
    public function __construct($oldCart){
		if($oldCart){
			$this->products = $oldCart->products;
			$this->totalPrice = $oldCart->totalPrice;
			$this->totalQuantity = $oldCart->totalQuantity;
		}
	}


	public function add($product,$quantity){
        $newProduct = ['quantity'=>0, 'price' => $product->price,'product'=>$product];        
        $id=$product->id;
        if($this->products){
            
            if(array_key_exists($id,$this->products)){
               
                $newProduct =$this->products[$id];
            }
        }
        $newProduct['quantity']+=$quantity;
        $newProduct['price']=$newProduct['quantity']*$product->price;
        $this->products[$id]= $newProduct;
        $this->totalPrice+=$product->price*$quantity;
        $this->totalQuantity+=$quantity;
       
    }

    public function removeProduct($id){
        $this->totalQuantity -=$this->products[$id]['quantity'];
        $this->totalPrice-=$this->products[$id]['price'];
        unset($this->products[$id]);
    }
    public function updateQuantity($id, $quantity){
        $this->totalQuantity-=$this->products[$id]['quantity'];
        $this->totalPrice-=$this->products[$id]['price'];
  
        $this->products[$id]['quantity']=$quantity;
        $this->products[$id]['price']=$quantity*$this->products[$id]['product']->price;

        $this->totalQuantity+=$this->products[$id]['quantity'];
        $this->totalPrice+=  $this->products[$id]['price'];
    }

}
