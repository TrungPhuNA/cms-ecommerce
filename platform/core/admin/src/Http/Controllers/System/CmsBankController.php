<?php


namespace Core\Admin\Http\Controllers\System;

use App\Http\Requests\AdminPageStaticRequest;
use App\Models\System\Bank;
use App\Models\System\PageStatic;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CmsBankController extends CmsAdminController
{
    public function index()
    {
        $banks    = Bank::orderByDesc('id')->paginate(20);
        $viewData = [
            'banks' => $banks
        ];

        return view('admin::pages.system.bank.index', $viewData);
    }

    public function edit($id)
    {
        $page = PageStatic::find($id);
        return view('admin::pages.system.static.create', compact('page'));
    }

    public function update(AdminPageStaticRequest $request, $id)
    {
        $data               = $request->except('_token');
        $data['ps_link']    = $this->getLink($request->ps_link);
        $data['ps_md5']     = md5(Str::slug($data['ps_link']));
        $data['updated_at'] = Carbon::now();
        PageStatic::find($id)->update($data);
        $this->showSuccessMessages();
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            PageStatic::find($id)->delete();
            return response()->json([
                'code' => 200
            ]);
        }
    }

    public function getLink($link)
    {
        $link = preg_replace('/^(.*)(\.vn|\.abc)/', '', $link);
        return $link;
    }
}
