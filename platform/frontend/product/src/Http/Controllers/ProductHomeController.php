<?php

namespace Frontend\Product\Http\Controllers;

use Frontend\Product\Http\Controllers\BaseProductController;

class ProductHomeController extends BaseProductController
{
    public function index()
    {
        return view('product::home.index');
    }
}
