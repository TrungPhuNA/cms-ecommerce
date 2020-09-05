<?php


namespace Frontend\Blog\Http\Controllers;


use App\Models\Blog\Article;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;

class BlogTagController extends BaseBlogController
{
    public function index(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);

        $articles = Article::whereHas('tags', function ($query) use ($tag) {
            $query->where('at_tag_id', $tag->id);
        })->select('id', 'a_name', 'a_slug', 'a_description', 'a_avatar', 'a_menu_id')
            ->orderByDesc('id')
            ->simplePaginate(10);

        $viewData = [
            'tag'         => $tag,
            'articlesHot' => $articlesHot ?? [],
            'articles'    => $articles
        ];
        return view('blog::tag.index', $viewData);
    }
}
