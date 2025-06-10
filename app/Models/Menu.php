<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    protected $fillable = ['menu_name', 'parent_id']; // Add other menu fields
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    
    // Self-referencing relationship for parent
    public function parent(){
        return $this->belongsTo(Menu::class,'parent_id');
    }
    // Children menus
    public function children(){
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // Recursive relationship for grandchildren
    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    public function roleMenuPermissions()
    {
        return $this->hasMany(RoleMenuPermission::class, 'menu_id','id');
    }
}
