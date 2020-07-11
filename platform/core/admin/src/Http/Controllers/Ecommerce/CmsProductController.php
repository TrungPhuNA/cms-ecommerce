<?php

namespace Core\Admin\Http\Controllers\Ecommerce;

use App\Models\Ecommerce\Attribute;
use App\Models\Ecommerce\AttributeValue;
use App\Models\Ecommerce\Product;
use App\Service\Category\CategoryService;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;

class CmsProductController extends CmsAdminController
{
    public function index()
    {
        $products = Product::paginate(20);
        $viewData = [
            'products' => $products
        ];
        return view('admin::pages.ecommerce.product.index', $viewData);
    }

    public function create()
    {
        CategoryService::getInstance()->recursive(0, 1, $categories);
        $attributes = $this->getAttribute();

        $viewData = [
            'categories'     => $categories,
            'attributes'     => $attributes,
            'attributeValue' => [],
        ];
        return view('admin::pages.ecommerce.product.create', $viewData);
    }

    protected function getAttribute()
    {
        return Attribute::with('attributeValues:id,av_name,av_slug,av_attribute_id')->get();
    }

    public function store(Request $request)
    {
        $data               = $request->except('_token', 'pav_attribute_id', 'pav_value_id');
        $data['created_at'] = Carbon::now();
        $id                 = Product::insertGetId($data);
        if ($id) {
            $this->syncAttributeValue($id, $request);
        }
        $this->showSuccessMessages();
        return redirect()->back();
    }

    protected function syncAttributeValue($productID, $request)
    {
        $pav_attributes = $request->pav_attribute_id ?? [];
        $pav_values     = $request->pav_value_id ?? [];

        foreach ($pav_attributes as $index => $attribute) {
            $data = [
                'pav_product_id'   => $productID,
                'pav_attribute_id' => $attribute,
                'pav_value_id'     => $pav_values[$index]
            ];

            \DB::table('product_attribute_value')->insert($data);
        }
    }

    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        CategoryService::getInstance()->recursive(0, 1, $categories);
        $attributes            = $this->getAttribute();
        $productAttributeValue = \DB::table('product_attribute_value')->where('pav_product_id', $id)
            ->get();

        $attributeValue = \DB::table('product_attribute_value')->where('pav_product_id', $id)
            ->pluck('pav_value_id')->toArray() ?? [];
        $attributeValue = $this->getProductAttributeValue($attributeValue);

        $viewData = [
            'categories'            => $categories,
            'product'               => $product,
            'productAttributeValue' => $productAttributeValue,
            'attributes'            => $attributes,
            'attributeValue'        => $attributeValue
        ];
        return view('admin::pages.ecommerce.product.update', $viewData);
    }

    protected function getProductAttributeValue($attributeValue)
    {
        $attributeValue =  AttributeValue::whereIn('id', $attributeValue)->get();
        return $attributeValue;
    }

    public function update(Request $request, $id)
    {
        $data               = $request->except('_token', 'pav_attribute_id', 'pav_value_id');
        $data['updated_at'] = Carbon::now();
        Product::findOrFail($id)->update($data);
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $product = Product::find($id);
            if ($product) {
                \DB::table('product_attribute_value')->where('pav_product_id', $id)->delete();
                $product->delete();

                return response()->json([
                    'code' => 200
                ]);
            }
        }
    }
}
