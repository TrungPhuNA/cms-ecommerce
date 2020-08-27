<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('menu:id,mn_name,mn_slug', 'tags')
            ->orderByDesc('id')
            ->limit(10)
            ->get();

        $articlesPositionTop = Article::where([
            'a_position_1' => 1,
            'a_status'     => Article::STATUS_PUBLIC
        ])->select('a_name', 'a_slug', 'a_avatar')
            ->orderByDesc('id')
            ->limit(3)
            ->get();

        $viewData = [
            'articles'            => $articles,
            'articlesPositionTop' => $articlesPositionTop
        ];
        return view('pages.home.index', $viewData);
    }
}
