<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['province','fname','lname','address','phone','email','city','postcode','note','user_id','status'];

    public function orderItems()
    {
        return $this->hasMany(orderitem::class);
    }
}
