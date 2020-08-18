<?php

namespace Core\Admin\Http\Controllers\Ecommerce;

use App\Http\Requests\AdminCategoryRequest;
use App\Models\Blog\SeoBlog;
use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\SeoEcommerce;
use App\Service\Category\CategoryService;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Core\Admin\Services\RenderUrlSeoBlogServices;
use Core\Admin\Services\RenderUrlSeoEcommerceServices;
use Illuminate\Http\Request;

class CmsCategoryController extends CmsAdminController
{
    public function index()
    {
        $categories = CategoryService::getInstance()->getListCategories();
        return view('admin::pages.ecommerce.category.index', compact('categories'));
    }

    public function create()
    {
        CategoryService::getInstance()->recursive(0, 1, $categories);
        $viewData = [
            'categories' => $categories ?? []
        ];
        return view('admin::pages.ecommerce.category.create', $viewData);
    }

    public function store(AdminCategoryRequest $request)
    {
        $data               = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $id                 = Category::insertGetId($data);
        if ($id) {
            $this->showSuccessMessages();
            RenderUrlSeoEcommerceServices::renderUrlEcommerce($request->c_slug, SeoEcommerce::TYPE_CATEGORY, $id);
            return redirect()->back();
        }
        $this->showErrorMessages();
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        CategoryService::getInstance()->recursive(0, 1, $categories);
        $viewData = [
            'category'   => $category,
            'categories' => $categories ?? []
        ];

        return view('admin::pages.ecommerce.category.update', $viewData);
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        $data               = $request->except('_token');
        $data['updated_at'] = Carbon::now();
        Category::findOrFail($id)->update($data);
        RenderUrlSeoEcommerceServices::renderUrlEcommerce($request->c_slug, SeoEcommerce::TYPE_CATEGORY, $id);
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $category = Category::find($id);
            if ($category) {
                SeoEcommerce::where([
                    'se_md5'  => md5($category->c_slug),
                    'se_type' => SeoEcommerce::TYPE_CATEGORY
                ])->delete();
                $category->delete();
            }
            return response()->json([
                'code' => 200
            ]);
        }
    }
}
