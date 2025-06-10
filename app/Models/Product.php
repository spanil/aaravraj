<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
     protected $fillable = ['name','slug','short_description','description','price','stock_quantity','image',
     'is_active','is_featured'];
     protected static function booted()
    {
        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
    });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }

    public function categories(){
        // return $this->belongsToMany(Category::class,'category_product');
        return $this->belongsToMany(Category::class);
    }
}
