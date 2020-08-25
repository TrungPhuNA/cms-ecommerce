<?php


namespace Frontend\Blog\Http\Controllers;


use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use Illuminate\Http\Request;

class BlogMenuController extends BaseBlogController
{
    public function index(Request $request, $id)
    {
        $menu     = Menu::findOrFail($id);
        $articles = Article::where('a_menu_id', $id)
            ->select('id','a_name','a_slug','a_avatar','a_menu_id','a_description')
            ->orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'menu'     => $menu,
            'articles' => $articles
        ];
        return view('blog::menu.index', $viewData);
    }
}
