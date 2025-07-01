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

   

}
