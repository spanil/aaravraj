<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    protected $fillable = ['menu_name', 'parent_id']; // Add other menu fields
    
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_menu_permissions')
            ->withPivot('has_view_access', 'has_create_access', 'has_update_access', 'has_delete_access');
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

    public static function getMenus($roleId)
    {
     $role_id = Auth::user()->id;
                // Check if the user is Super Admin
        if (Auth::user()->id == '1') {
            return Menu::with([
                'children.children',
                    'roles' => function ($query) use ($role_id) {
                        $query->where('role_id', $role_id);
                },
                'children.roles' => function ($query) use ($role_id) {
                    $query->where('role_id', $role_id);
                },
                'children.children.roles' => function ($query) use ($role_id) {
                    $query->where('role_id', $role_id);
                },
            ])->where('parent_id', 0)->get();; 
        }
        return Menu::with([
    'children.children',
    'roles' => function ($query) use ($role_id) {
        $query->where('role_id', $role_id)
              ->where(function ($q) {
                  $q->where('has_view_access', 1)
                    ->orWhere('has_create_access', 1)
                    ->orWhere('has_update_access', 1)
                    ->orWhere('has_delete_access', 1);
              });
    },
    'children.roles' => function ($query) use ($role_id) {
        $query->where('role_id', $role_id)
              ->where(function ($q) {
                  $q->where('has_view_access', 1)
                    ->orWhere('has_create_access', 1)
                    ->orWhere('has_update_access', 1)
                    ->orWhere('has_delete_access', 1);
              });
    },
    'children.children.roles' => function ($query) use ($role_id) {
        $query->where('role_id', $role_id)
              ->where(function ($q) {
                  $q->where('has_view_access', 1)
                    ->orWhere('has_create_access', 1)
                    ->orWhere('has_update_access', 1)
                    ->orWhere('has_delete_access', 1);
              });
    },
])
->where('parent_id', 0)
->get();
    }

     public static function copyMenu($role_id) {
        if($role_id != 0) {
            $menus = Menu::all();
            foreach ($menus as $menu) {
                if(Self::checkMenu($role_id, $menu->id) == 0) {
                    RoleMenuPermission::insert([
                                'role_id' => $role_id,
                                'menu_id' => $menu->id,
                                'has_view_access' => '0',
                                'has_create_access' => '0',
                                'has_update_access' => '0',
                                'has_delete_access' => '0'
                            ]);
                }
            }
        }
    }

    public static function checkMenu($role_id, $menu_id) {
        return DB::table('role_menu_permissions')
                    ->where('role_id', '=', $role_id)
                    ->where('menu_id', '=', $menu_id)
                    ->count();
    }
}
