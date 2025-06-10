<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['parent_id', 'name','slug','description','image','is_active'];
    protected static function booted()
    {
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
    });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    public function products(){
        //return $this->belongsToMany(Product::class,'category_product');
        return $this->belongsToMany(Product::class);
    }
}
