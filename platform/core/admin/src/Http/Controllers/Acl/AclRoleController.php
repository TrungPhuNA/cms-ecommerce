<?php

namespace Core\Admin\Http\Controllers\Acl;

use App\Http\Requests\AdminRoleRequest;
use App\Models\Acl\Permission;
use App\Models\Acl\Role;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AclRoleController extends CmsAdminController
{
    public function index()
    {
        $roles    = Role::all();
        $viewData = [
            'roles' => $roles
        ];

        return view('admin::pages.acl.role.index', $viewData);
    }

    public function create()
    {
        $permissions = Permission::orderBy('group_permission', 'asc')->get();

        $group_permission = $this->getGroupPermission();
        $viewData         = [
            'permissions' => $permissions,
            'group'       => $group_permission
        ];

        return view('admin::pages.acl.role.create', $viewData);
    }

    public function store(AdminRoleRequest $request)
    {
        $role              = new Role();
        $role->name        = $request->name;
        $role->guard_name  = 'admins';
        $role->name_slug   = Str::slug($request->name);
        $role->description = $request->description;
        $role->save();

        $role->syncPermissions($request->permissions);
        try {
            if ($permissions = $request->permissions) {
                foreach ($permissions as $item) {
                    \DB::table('model_has_permissions')
                        ->insert([
                            'model_type'    => 'App\Models\Acl\Admin',
                            'permission_id' => $item,
                            'model_id'      => get_data_user('admins')
                        ]);
                }
            }
        } catch (\Exception $exception) {
            Log::error("[Error: ]" . $exception->getMessage());
        }
        $this->showSuccessMessages();
        return redirect()->back();
    }

    public function edit($id)
    {
        $permissions        = Permission::orderBy('group_permission', 'asc')->get();
        $role               = Role::findOrFail($id);
        $permissions_active = $role->permissions()->pluck('id')->toArray();

        $viewData = [
            'permissions'        => $permissions,
            'role'               => $role,
            'permissions_active' => $permissions_active ?? []
        ];

        return view('admin::pages.acl.role.update', $viewData);
    }

    public function update(AdminRoleRequest $request, $id)
    {
        $role              = Role::findOrFail($id);
        $role->name        = $request->name;
        $role->name_slug   = Str::slug($request->name);
        $role->guard_name  = 'admins';
        $role->description = $request->description;

        $role->save();

        $allPermissions = Permission::all();//Get all permissions
        foreach ($allPermissions as $p) {
            $role->revokePermissionTo($p); //Remove all permissions associated with role
        }

        if ($permissions = $request->permissions) {
            foreach ($permissions as $permission)
                $role->givePermissionTo($permission);
        }

        return redirect()->back();

    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()){
            Role::findOrFail($id)->delete();
            \DB::table('role_has_permissions')->where('role_id', $id)->delete();
            \DB::table('model_has_roles')->where('role_id', $id)->delete();
            return response()->json([
                'code' => 200
            ]);
        }
    }

    private function getGroupPermission()
    {
        $group_permission = config('permission.group_permission') ?? [];
        return $group_permission;
    }
}
