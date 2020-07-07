<?php


namespace Core\Admin\Http\Controllers\Blog;


use Core\Admin\Http\Controllers\CmsAdminController;

class CmsArticleController extends CmsAdminController
{
    public function index()
    {
        return view('admin::pages.blog.article.index');
    }

    public function create()
    {
        return view('admin::pages.blog.article.index');
    }
}
