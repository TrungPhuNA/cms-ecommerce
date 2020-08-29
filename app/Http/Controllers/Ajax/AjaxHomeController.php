<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxHomeController extends Controller
{
    public function loadActiveByMenu(Request $request)
    {
        if ($request->ajax()) {
            $slug = strip_tags($request->slug);
            if (!$slug) {
                return response()->json([
                    'code' => 200
                ]);
            }
            $menu = Menu::where('mn_status', 3)
                ->where('mn_slug', $slug)
                ->first();
            if (!$menu) {
                return response()->json([
                    'code' => 200
                ]);
            }
            $articlesHotMenu = Article::where('a_status', 3)
                ->where('a_menu_id', $menu->id)
                ->select('a_name', 'a_slug', 'a_avatar', 'a_description', 'a_menu_id')
                ->orderByDesc('id')
                ->limit(10)
                ->get();

            $html = view('pages.home.include._inc_article_three_child',
                ['articlesHotMenu' => $articlesHotMenu])->render();
            return response()->json([
                'code' => 200,
                'html' => $html
            ]);
        }
    }
}
