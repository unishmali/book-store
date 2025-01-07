<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','product_id','quantity','status'];
   protected $with = ['product'];

    public function product(){
        return $this->belongsTo(product::class);
    }
    public function user(){
        return $this->hasOne(user::class);
    }

    public function orderItems()
    {
        return $this->hasMany(orderitem::class);
    }
}
