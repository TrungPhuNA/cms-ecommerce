<?php

namespace Core\Admin\Http\Controllers\Acl;

use App\Http\Requests\AdminPermissionRequest;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class AclPermissionController extends CmsAdminController
{
    public function index()
    {
        $permissions = Permission::orderBy('group_permission','asc')->get();
        $viewData = [
            'permissions' => $permissions
        ];
        return view('admin::pages.acl.permission.index',$viewData);
    }

    public function create()
    {
        $group = $this->getGroupPermission();
        return view('admin::pages.acl.permission.create', compact('group'));
    }

    public function store(AdminPermissionRequest $request)
    {
        $permission                   = new Permission();
        $permission->name             = $request->name;
        $permission->description      = $request->description;
        $permission->group_permission = $request->group_permission;
        $permission->guard_name       = 'admins';
        $permission->save();

        $this->showSuccessMessages();
        return redirect()->back();
    }

    public function edit($id)
    {
        $group      = $this->getGroupPermission();
        $permission = Permission::findOrFail($id);
        return view('admin::pages.acl.permission.update', compact('group', 'permission'));
    }

    public function update(AdminPermissionRequest $request, $id)
    {
        $permission                   = Permission::findOrFail($id);
        $permission->name             = $request->name;
        $permission->description      = $request->description;
        $permission->group_permission = $request->group_permission;
        $permission->guard_name       = 'admins';
        $permission->save();
        $this->showSuccessMessages();
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()){
            Permission::findOrFail($id)->delete();
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
