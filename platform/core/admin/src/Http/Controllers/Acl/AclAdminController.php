<?php
namespace Core\Admin\Http\Controllers\Acl;

use App\Http\Requests\AdminAdminRequest;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\Acl\Admin;

class AclAdminController extends CmsAdminController
{
    public function index()
    {
//        if (!check_admin()) return redirect()->route('get.admin.index');
        $admins = Admin::get();
        $viewData = [
            'admins' => $admins
        ];
        return view('admin::pages.acl.admin.index', $viewData);
    }

    public function create()
    {
        $roles    = Role::all();
        return view('admin::pages.acl.admin.create',compact('roles'));
    }

    public function store(AdminAdminRequest $request)
    {
        $data = $request->except("_token","roles");
        $data['password']   =  \Hash::make($data['password']);
        $data['created_at'] = Carbon::now();

        $admin = Admin::insert($data);
        if ($roles = $request->roles) {
            $admin->assignRole($request->roles);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        $roles     = Role::all();
        $roles_old = $admin->roles()->pluck('id')->toArray();
        return view('admin::pages.acl.admin.update', compact('admin','roles','roles_old'));
    }

    public function update(AdminAdminRequest $request, $id)
    {
        $data = $request->except("_token","password","roles");
        $admin = Admin::find($id);
        if ($request->password)
        {
            $admin->password   =  Hash::make($request->password);
        }
        $admin->fill($data)->save();
//		$roles = $request->roles;
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $admin->assignRole($request->input('roles'));
        return redirect()->back();
    }
}
