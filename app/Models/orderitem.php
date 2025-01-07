<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderitem extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'cart_id','status'];
    protected $with = ['cart', 'order'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function cart()
    {
        return $this->belongsTo(cart::class);
    }
   
}
