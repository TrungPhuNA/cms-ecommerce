<?php

namespace Core\Admin\Http\Controllers\Blog;

use App\Service\Menus\MenusService;
use Core\Admin\Http\Controllers\CmsAdminController;

class CmsArticleController extends CmsAdminController
{
    public function index()
    {
        return view('admin::pages.blog.article.index');
    }

    public function create()
    {
        MenusService::getInstance()->recursive(0, 1, $menus);
        return view('admin::pages.blog.article.create', compact('menus'));
    }
}
