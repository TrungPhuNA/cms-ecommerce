<?php


namespace Core\Admin\Services;


use App\Models\Blog\SeoBlog;
use App\Models\Ecommerce\SeoEcommerce;
use Illuminate\Support\Str;

class RenderUrlSeoEcommerceServices
{
    public static function renderUrlEcommerce(string $slug, int $type, int $id)
    {
        $md5             = md5(Str::slug($slug));
        $checkUrlSeoBlog = SeoEcommerce::where([
            'se_md5'  => $md5,
            'se_type' => $type
        ])->first();

        if (!$checkUrlSeoBlog) {
            SeoEcommerce::insert([
                'se_md5'       => $md5,
                'se_type'      => $type,
                'se_action_id' => $id
            ]);
        }
    }
}
