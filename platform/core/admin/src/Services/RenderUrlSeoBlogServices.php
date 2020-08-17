<?php

namespace Core\Admin\Services;

use App\Models\Blog\SeoBlog;
use Illuminate\Support\Str;

class RenderUrlSeoBlogServices
{
    public static function renderUrlBLog(string $slug, int $type, int $id)
    {
        $md5             = md5(Str::slug($slug));
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
}
