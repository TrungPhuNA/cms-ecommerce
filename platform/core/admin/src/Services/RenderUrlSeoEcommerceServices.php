<?php


namespace Core\Admin\Services;


use App\Models\Blog\SeoBlog;
use App\Models\Ecommerce\SeoEcommerce;
use Illuminate\Support\Str;

class RenderUrlSeoEcommerceServices
{
    public static function renderUrlEcommerce(string $slug, int $type, int $id)
    {
        $that   = new self();
        $prefix = $that->deletePrefix($type);
        $md5    = md5(Str::slug($slug . '-' . $prefix));

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

    protected function deletePrefix($type)
    {
        $prefix = SeoEcommerce::SLUG_KEYWORD;
        if ($type == SeoEcommerce::TYPE_CATEGORY) {
            $prefix = SeoEcommerce::SLUG_CATEGORY;
        } elseif ($type == SeoEcommerce::TYPE_PRODUCT) {
            $prefix = SeoEcommerce::SLUG_PRODUCT;
        }
        return $prefix;
    }
}
