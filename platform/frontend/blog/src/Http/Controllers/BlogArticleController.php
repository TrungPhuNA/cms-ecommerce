<?php


namespace Frontend\Blog\Http\Controllers;


use App\Models\Blog\Article;
use App\Service\CountView\ProcessViewService;
use Illuminate\Http\Request;

class BlogArticleController extends BaseBlogController
{
    public function index(Request $request, $id)
    {
        $article      = Article::with('menu:id,mn_name,mn_slug','auth:id,name')->findOrFail($id);
        $articlesNews = Article::with('menu:id,mn_name,mn_slug', 'tags')
            ->orderByDesc('id')
            ->limit(10)
            ->get();

        //2. Xử lý view
        ProcessViewService::view('articles', 'a_view', 'article', $id);

        $viewData = [
            'articlesNews'  => $articlesNews,
            'articleDetail' => $article
        ];
        return view('blog::article.index', $viewData);
    }
}
