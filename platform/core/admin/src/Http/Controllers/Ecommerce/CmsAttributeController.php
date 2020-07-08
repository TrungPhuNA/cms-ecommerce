<?php

namespace Core\Admin\Http\Controllers\Ecommerce;

use App\Http\Requests\AdminAttributeRequest;
use App\Models\Ecommerce\Attribute;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;

class CmsAttributeController extends CmsAdminController
{
    public function index()
    {
        $attributes = Attribute::orderByDesc('id')->get();
        return view('admin::pages.ecommerce.attribute.index', compact('attributes'));
    }

    public function create()
    {
        return view('admin::pages.ecommerce.attribute.create');
    }

    public function store(AdminAttributeRequest $request)
    {
        $data               = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $id                 = Attribute::insertGetId($data);
        if ($id) {
            $this->showSuccessMessages();
            return redirect()->back();
        }
        $this->showErrorMessages();
        return redirect()->back();
    }

    public function edit($id)
    {
        $attribute = Attribute::findOrfail($id);
        return view('admin::pages.ecommerce.attribute.update', compact('attribute'));
    }

    public function update(AdminAttributeRequest $request, $id)
    {
        $data               = $request->except('_token');
        $data['updated_at'] = Carbon::now();
        Attribute::findOrFail($id)->update($data);
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            Attribute::find($id)->delete();
            return response()->json([
                'code' => 200
            ]);
        }
    }
}
