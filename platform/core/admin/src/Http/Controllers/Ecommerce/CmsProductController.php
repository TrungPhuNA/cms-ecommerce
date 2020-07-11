<?php
namespace Core\Admin\Http\Controllers\Ecommerce;

use App\Models\Ecommerce\Attribute;
use App\Models\Ecommerce\Product;
use App\Service\Category\CategoryService;
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
        $attributes = Attribute::all();

        $viewData = [
            'categories' => $categories,
            'attributes' => $attributes
        ];
        return view('admin::pages.ecommerce.product.create', $viewData);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $id = Product::insertGetId($data);
        $this->showSuccessMessages();
        return redirect()->back();
    }
}
