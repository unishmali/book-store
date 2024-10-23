<?php

namespace App\Models;

use App\Traits\slug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class category extends Model
{
    use HasFactory;


    protected $fillable = ['title','slug'];
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


    public function products()
    {
        return $this->hasMany(product::class);
    }
}
