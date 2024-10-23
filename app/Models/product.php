<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
Use Illuminate\Support\Str;

class product extends Model
{
    use HasFactory;
 

    protected $fillable = ['title','slug','category_id','photo','author','price','compare_price','description','offer','feature','bestselling','isbn','lesson','pages','language','publisher','datepublish'];

 

    public function getPhotoAttribute($value){
        return Storage::disk('public')->url('images/' . $value);
    }
    public static function boot(){
        parent::boot();
        static::creating(function ($model) {
            $model->slug = Str::slug($model->title);
            $i = 1;
            while (static::where('slug', $model->slug)->exists()) {
                $model->slug = Str::slug($model->title) . '-' . $i;
                $i++;
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function carts()
    {
        return $this->hasMany(cart::class);
    }

     public function wishlists()
     {
         return $this->hasMany(wishlist::class);
     }
}
