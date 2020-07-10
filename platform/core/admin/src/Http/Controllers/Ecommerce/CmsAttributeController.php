<?php

namespace Core\Admin\Http\Controllers\Ecommerce;

use App\Http\Requests\AdminAttributeRequest;
use App\Models\Ecommerce\Attribute;
use App\Models\Ecommerce\AttributeValue;
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
        $attributeValue = [];
        return view('admin::pages.ecommerce.attribute.create', compact('attributeValue'));
    }

    public function store(AdminAttributeRequest $request)
    {
        $data               = $request->except('_token', 'av_name', 'av_slug', 'av_color', 'av_id');
        $data['created_at'] = Carbon::now();
        $id                 = Attribute::insertGetId($data);
        if ($id) {
            $this->syncAttributeValue($id, $request);
            $this->showSuccessMessages();
            return redirect()->back();
        }
        $this->showErrorMessages();
        return redirect()->back();
    }

    public function edit($id)
    {
        $attribute      = Attribute::findOrfail($id);
        $attributeValue = AttributeValue::where('av_attribute_id', $id)->get();
        return view('admin::pages.ecommerce.attribute.update', compact('attribute', 'attributeValue'));
    }

    protected function syncAttributeValue($attributeID, $request)
    {
        $names  = $request->av_name;
        $slugs  = $request->av_slug;
        $colors = $request->av_color;
        $ids    = $request->av_id;
        if (!empty($names)) {
            foreach ($names as $key => $item) {
                if ($item) {
                    $data = [
                        'av_attribute_id' => $attributeID,
                        'av_name'         => $item,
                        'av_slug'         => $slugs[$key],
                        'av_color'        => $colors[$key],
                        'created_at'      => Carbon::now()
                    ];
                    if ($ids[$key]) {
                        AttributeValue::find($ids[$key])->update($data);
                    }else{
                        AttributeValue::insert($data);
                    }
                }
            }
        }
    }

    public function update(AdminAttributeRequest $request, $id)
    {
        $data               = $request->except('_token', 'av_name', 'av_slug', 'av_color', 'av_id');
        $data['updated_at'] = Carbon::now();
        Attribute::findOrFail($id)->update($data);
        $this->syncAttributeValue($id, $request);
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
