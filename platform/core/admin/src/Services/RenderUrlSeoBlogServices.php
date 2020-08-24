<?php

namespace Core\Admin\Services;

use App\Models\Blog\SeoBlog;
use App\Models\Ecommerce\SeoEcommerce;
use Illuminate\Support\Str;

class RenderUrlSeoBlogServices
{
    public static function renderUrlBLog(string $slug, int $type, int $id)
    {
        $that   = new self();
        $prefix = $that->deletePrefix($type);
        $md5    = md5(Str::slug($slug . '-' . $prefix));

        $checkUrlSeoBlog = SeoBlog::where([
            'sb_md5'  => $md5,
            'sb_type' => $type
        ])->first();

        if (!$checkUrlSeoBlog) {
            SeoBlog::insert([
                'sb_md5'       => $md5,
                'sb_type'      => $type,
                'sb_action_id' => $id
            ]);
        }
    }

    protected function deletePrefix($type)
    {
        $prefix = SeoBlog::SLUG_TAG;
        if ($type == SeoBlog::TYPE_MENU) {
            $prefix = SeoBlog::SLUG_MENU;
        } elseif ($type == SeoBlog::TYPE_ARTICLE) {
            $prefix = SeoBlog::SLUG_ARTICLE;
        }
        return $prefix;
    }
}
