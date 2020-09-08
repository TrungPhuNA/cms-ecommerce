<?php

namespace Frontend\Product\Http\Controllers;

use App\Models\Ecommerce\Product;
use Frontend\Product\Http\Controllers\BaseProductController;

class ProductHomeController extends BaseProductController
{
    public function index()
    {
        $products = Product::all();
        $viewData = [
            'products' => $products
        ];
        return view('product::home.index', $viewData);
    }
}
