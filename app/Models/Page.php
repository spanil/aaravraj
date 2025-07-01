<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Page extends Model
{
    protected $fillable = ['name', 'slug', 'image','description', 'meta_title', 'meta_description' ];

    protected static function booted()
    {
        static::creating(function ($page) {
            $page->slug = Str::slug($page->name);
    });

        static::updating(function ($page) {
            $page->slug = Str::slug($page->name);
        });
    }
  
}
