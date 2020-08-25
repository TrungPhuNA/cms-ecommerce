<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('menu:id,mn_name,mn_slug','tags')
            ->orderByDesc('id')
            ->limit(10)
            ->get();
        $viewData = [
            'articles' => $articles
        ];
        return view('pages.home.index', $viewData);
    }
}
