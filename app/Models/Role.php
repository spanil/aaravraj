<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
     protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasOne(User::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class,'role_menu_permissions')
                ->withPivot('has_view_access', 'has_create_access', 'has_update_access', 'has_delete_access');
    }
}
