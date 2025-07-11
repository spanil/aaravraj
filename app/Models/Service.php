<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = ['title', 'slug', 'image','short_description','description','status'];

    protected static function booted()
    {
        static::creating(function ($service) {
            $service->slug = Str::slug($service->title);
    });

        static::updating(function ($service) {
            $service->slug = Str::slug($service->title);
        });
    }
}
