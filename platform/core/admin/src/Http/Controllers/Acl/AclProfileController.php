<?php


namespace Core\Admin\Http\Controllers\Acl;


use App\Http\Requests\AdminProfileRequest;
use App\Models\Acl\Admin;
use Core\Admin\Http\Controllers\CmsAdminController;

class AclProfileController extends CmsAdminController
{
    public function index()
    {
        $adminID  = get_data_user('admins');
        $admin    = Admin::findOrFail($adminID);
        $viewData = [
            'admin' => $admin
        ];
        return view('admin::pages.acl.profile.index', $viewData);
    }

    public function updateProfile(AdminProfileRequest $request, $id)
    {
        if ($request->ajax())
        {
            $admin = Admin::findOrFail($id);
            $admin->about = $request->about;
            $admin->phone = $request->phone;
            $admin->save();
            return response([
                'code' => 200
            ]);
        }
    }
}
