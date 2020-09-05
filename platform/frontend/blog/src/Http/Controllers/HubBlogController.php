<?php


namespace Frontend\Blog\Http\Controllers;


use App\Models\Blog\SeoBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HubBlogController extends BaseBlogController
{
    public function renderAction(Request $request, $slug)
    {
        $code = md5(Str::slug($slug));
        $action = SeoBlog::where('sb_md5', $code)->first();
        if (!$action) return redirect()->to('/');

        $type = $action->sb_type;
        $idAction = $action->sb_action_id;
        switch ($type)
        {
            case SeoBlog::TYPE_ARTICLE:
                return (new BlogArticleController())->index($request, $idAction);
                break;

            case SeoBlog::TYPE_MENU:
                return (new BlogMenuController())->index($request, $idAction);
                break;

            case SeoBlog::TYPE_TAG:
                return (new BlogTagController())->index($request, $idAction);
                break;
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
