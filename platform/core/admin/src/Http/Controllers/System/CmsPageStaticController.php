<?php


namespace Core\Admin\Http\Controllers\System;

use App\Http\Requests\AdminPageStaticRequest;
use App\Models\System\PageStatic;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CmsPageStaticController extends CmsAdminController
{
    public function index()
    {
        $pages    = PageStatic::orderByDesc('id')->paginate(20);
        $viewData = [
            'pages' => $pages
        ];
        return view('admin::pages.system.static.index', $viewData);
    }

    public function create()
    {
        return view('admin::pages.system.static.create');
    }

    public function store(AdminPageStaticRequest $request)
    {
        $data               = $request->except('_token');
        $data['ps_link']    = $this->getLink($request->ps_link);
        $data['ps_md5']     = md5(Str::slug($data['ps_link']));
        $data['created_at'] = Carbon::now();

        $id = PageStatic::insertGetId($data);
        if ($id) $this->showSuccessMessages();

        return redirect()->back();
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
