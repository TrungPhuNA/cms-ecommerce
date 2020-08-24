<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $articles = Article::with('menu:id,mn_name,mn_slug','tags')->get();
        $viewData = [
            'articles' => $articles
        ];
        return view('pages.dashboard.index', $viewData);
    }
}
