<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Model;

class SeoEcommerce extends Model
{
    protected $table = 'seo_ecommerces';
    protected $guarded = [''];

    const TYPE_KEYWORD  = 1;
    const TYPE_CATEGORY = 2;
    const TYPE_PRODUCT  = 3;

    const SLUG_KEYWORD = 'k';
    const SLUG_CATEGORY = 'c';
    const SLUG_PRODUCT = 'p';
}
