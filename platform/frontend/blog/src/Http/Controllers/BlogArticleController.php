<?php


namespace Frontend\Blog\Http\Controllers;


use App\Models\Blog\Article;
use App\Service\CountView\ProcessViewService;
use Illuminate\Http\Request;

class BlogArticleController extends BaseBlogController
{
    public function index(Request $request, $id)
    {
        $article      = Article::with('menu:id,mn_name,mn_slug', 'auth:id,name')->findOrFail($id);
        $articlesNews = Article::with('menu:id,mn_name,mn_slug', 'tags')
            ->orderByDesc('id')
            ->limit(10)
            ->get();

        //2. Xử lý view
        ProcessViewService::view('articles', 'a_view', 'article', $id);

        $articlesViews = Article::where('a_status', 3)
            ->orderBy('a_view', 'desc')
            ->limit(10)
            ->select('a_name', 'a_slug', 'a_avatar', 'a_description', 'a_view')
            ->get();

        $viewData = [
            'articlesNews'  => $articlesNews,
            'articleDetail' => $article,
            'articlesViews' => $articlesViews
        ];
        return view('blog::article.index', $viewData);
    }
}
