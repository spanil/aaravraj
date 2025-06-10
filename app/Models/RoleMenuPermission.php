<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RoleMenuPermission extends Model
{
    protected $table = 'role_menu_permissions'; 

    protected $fillable = [
        'role_id',
        'menu_id',
        'has_view_access',
        'has_create_access',
        'has_update_access',
        'has_delete_access',
    ];

    protected $casts = [
        'has_view_access' => 'boolean',
        'has_create_access' => 'boolean',
        'has_update_access' => 'boolean',
        'has_delete_access' => 'boolean',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }

    public function menus()
    {
        return $this->belongsTo(Menu::class);
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
