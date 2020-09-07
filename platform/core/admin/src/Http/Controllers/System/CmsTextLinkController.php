<?php


namespace Core\Admin\Http\Controllers\System;

use App\Http\Requests\Admin\AdminTextLinkRequest;
use App\Models\System\PageStatic;
use App\Models\System\TextLink;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;

class CmsTextLinkController extends CmsAdminController
{
    public function index()
    {
        $textLinks    = TextLink::orderByDesc('id')->paginate(20);
        $viewData = [
            'textLinks' => $textLinks
        ];
        return view('admin::pages.system.text_link.index', $viewData);
    }

    public function create()
    {
        return view('admin::pages.system.text_link.create');
    }

    public function store(AdminTextLinkRequest $request)
    {
        $data               = $request->except('_token');
        $data['created_at'] = Carbon::now();

        $id = TextLink::insertGetId($data);
        if ($id) $this->showSuccessMessages();

        return redirect()->back();
    }

    public function edit($id)
    {
        $textLink = TextLink::find($id);
        return view('admin::pages.system.text_link.create', compact('textLink'));
    }

    public function update(AdminTextLinkRequest $request, $id)
    {
        $data               = $request->except('_token');
        $data['updated_at'] = Carbon::now();
        TextLink::find($id)->update($data);
        $this->showSuccessMessages();
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            TextLink::find($id)->delete();
            return response()->json([
                'code' => 200
            ]);
        }
    }
}
