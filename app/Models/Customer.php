<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Customer extends Model
{
    use HasFactory,Notifiable;
    protected $table='customers';
    public function bill(){
        return $this->hasMany('App\Bill','customer_id','id');
    }



}
