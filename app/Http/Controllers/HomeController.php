<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Bài viết mới
        $articles = Article::with('menu:id,mn_name,mn_slug', 'tags')
            ->orderByDesc('id')
            ->limit(10)
            ->get();

        // 3 Bài nổi bật
        $articlesPositionTop = Article::where([
            'a_position_1' => 1,
            'a_status'     => Article::STATUS_PUBLIC
        ])->select('a_name', 'a_slug', 'a_avatar', 'a_description')
            ->orderByDesc('id')
            ->limit(3)
            ->get();

        // Các bài diễn đàn
        $articlesPositionBox = Article::with('auth:id,name')
            ->where([
                'a_position_2' => 1,
                'a_status'     => Article::STATUS_PUBLIC
            ])->select('a_name', 'a_slug', 'a_avatar', 'a_description')
            ->orderByDesc('id')
            ->limit(18)
            ->get();

        // menu hot
        $menusHot = Menu::with('children:id,mn_name,mn_slug,mn_parent_id')
            ->where('mn_status', 3)
            ->where('mn_position_1', 1)
            ->select('mn_name', 'id', 'mn_slug', 'mn_parent_id')
            ->first();

        // bai viet theo menu hot
        if ($menusHot) {
            $articlesHotMenu = Article::where('a_status', 3)
                ->where('a_menu_id', $menusHot->id)
                ->select('a_name', 'a_slug', 'a_avatar', 'a_description', 'a_menu_id')
                ->orderByDesc('id')
                ->limit(10)
                ->get();
        }

        $viewData = [
            'articles'            => $articles,
            'articlesPositionTop' => $articlesPositionTop,
            'articlesPositionBox' => $articlesPositionBox,
            'menusHot'            => $menusHot,
            'articlesHotMenu'     => $articlesHotMenu ?? []
        ];
        return view('pages.home.index', $viewData);
    }
}
