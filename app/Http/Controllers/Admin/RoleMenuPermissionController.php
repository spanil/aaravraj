<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Menu;
Use App\Models\RoleMenuPermission;
Use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class RoleMenuPermissionController extends Controller
{
      public function index(Request $request)
    {
        $roles = Role::all();
        if ($request->role_id) {
            $role_id = $request->input('role_id');
            RoleMenuPermission::copyMenu($role_id);
            $menus = Menu::with([
                'children.children',
                    'roleMenuPermissions' => function ($query) use ($role_id) {
                        $query->where('role_id', $role_id);
                },
                'children.roleMenuPermissions' => function ($query) use ($role_id) {
                    $query->where('role_id', $role_id);
                },
                'children.children.roleMenuPermissions' => function ($query) use ($role_id) {
                    $query->where('role_id', $role_id);
                },
            ])->where('parent_id', 0)->get();         
        }else {
            $menus = [];
        }      
        
        return view('admin.role_menu_permission.index',compact('menus', 'roles'));
    }



public function showRolePermissions__($roleId) 
{
    $currentRole = Role::findOrFail($roleId); 
   
    $menus = Menu::with(['children' => function ($query) use ($roleId) {
        $query->with(['permissionsForRole' => function (HasMany $q) use ($roleId) {
            $q->where('role_id', $roleId);
        }]);
    }, 'permissionsForRole' => function (HasMany $q) use ($roleId) {
        $q->where('role_id', $roleId);
    }])->whereNull('parent_id')
      ->get();

    return view('admin.role_menu_permission.index', compact('menus', 'currentRole'));
}

public function updatePermission(Request $request) 
{
   $request->validate([
        'role_id' => 'required|integer',
        'menu_id' => 'required|integer',
        'permission' => 'required|in:has_view_access,has_create_access,has_update_access,has_delete_access',
        'value' => 'required|boolean',
    ]);

    try {
        RoleMenuPermission::updateOrCreate(
            [
                'role_id' => $request->role_id,
                'menu_id' => $request->menu_id,
            ],
            [
                $request->permission => $request->value,
            ]
        );

        return response()->json(['success' => true, 'message' => 'Permission updated successfully!']);

    } catch (\Exception $e) {
        \Log::error('Error updating menu permission: ' . $e->getMessage(), $request->all());
        return response()->json(['success' => false, 'message' => 'Failed to update permission.'], 500);
    }
}

 }   
