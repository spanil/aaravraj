<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 protected $fillable = [
        'name',
    ];

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
