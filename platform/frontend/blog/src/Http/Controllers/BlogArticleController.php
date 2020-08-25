<?php


namespace Frontend\Blog\Http\Controllers;


use App\Models\Blog\Article;
use Illuminate\Http\Request;

class BlogArticleController extends BaseBlogController
{
    public function index(Request $request, $id)
    {
        $article = Article::with('menu:id,mn_name,mn_slug')->findOrFail($id);
        $viewData = [
            'articleDetail' => $article
        ];
        return view('blog::article.index', $viewData);
    }
}
