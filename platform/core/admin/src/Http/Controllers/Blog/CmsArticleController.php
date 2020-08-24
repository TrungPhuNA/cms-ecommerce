<?php

namespace Core\Admin\Http\Controllers\Blog;

use App\Http\Requests\AdminArticleRequest;
use App\Http\Requests\AdminMenuRequest;
use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use App\Models\Blog\SeoBlog;
use App\Models\Blog\Tag;
use App\Service\Menus\MenusService;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Core\Admin\Services\RenderUrlSeoBlogServices;
use Illuminate\Http\Request;

class CmsArticleController extends CmsAdminController
{
    public function index()
    {
        $articles = Article::with('menu:id,mn_name')->orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'articles' => $articles
        ];
        return view('admin::pages.blog.article.index', $viewData);
    }

    public function create()
    {
        MenusService::getInstance()->recursive(0, 1, $menus);
        $menus = $menus ?? [];

        $viewData = [
            'tags'  => $this->getTags(),
            'menus' => $menus
        ];
        return view('admin::pages.blog.article.create', $viewData);
    }

    public function store(AdminArticleRequest $request)
    {
        $data               = $request->except('_token', 'avatar', 'tags');
        $data['created_at'] = Carbon::now();
        $id                 = Article::insertGetId($data);
        if ($id) {
            RenderUrlSeoBlogServices::renderUrlBLog($request->a_slug, SeoBlog::TYPE_ARTICLE, $id);
            $this->showSuccessMessages();
            if ($tags = $request->tags) $this->syncTags($tags, $id);
            return redirect()->back();
        }
        $this->showErrorMessages();
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        MenusService::getInstance()->recursive(0, 1, $menus);

        $tagsOld = \DB::table('articles_tags')
            ->where("at_article_id", $id)
            ->pluck('at_tag_id')
            ->toArray() ?? [];

        $viewData = [
            'article' => $article,
            'menus'   => $menus ?? [],
            'tags'    => $this->getTags(),
            'tagsOld' => $tagsOld
        ];

        return view('admin::pages.blog.article.update', $viewData);
    }

    public function update(AdminArticleRequest $request, $id)
    {
        $data               = $request->except('_token', 'avatar', 'tags');
        $data['updated_at'] = Carbon::now();

        if ($request->avatar)
        {
            $file = uploadsFile('avatar');
            if (isset($file['code']) && $file['code'] == 1)
            {
                dd($file);
                $data['a_avatar'] = $file['name'];
            }
        }

        Article::findOrFail($id)->update($data);
        RenderUrlSeoBlogServices::renderUrlBLog($request->a_slug, SeoBlog::TYPE_ARTICLE, $id);
        if ($tags = $request->tags) $this->syncTags($tags, $id);
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    protected function getTags()
    {
        return Tag::all();
    }

    protected function syncTags($tags, $articleID)
    {
        if (empty($tags)) return;

        $datas = [];
        foreach ($tags as $tag) {
            $datas[] = [
                'at_article_id' => $articleID,
                'at_tag_id'     => $tag
            ];
        }

        \DB::table('articles_tags')->where('at_article_id', $articleID)->delete();
        \DB::table('articles_tags')->insert($datas);
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $article = Article::find($id);
            if ($article) {
                SeoBlog::where([
                    'sb_md5'  => md5($article->a_slug),
                    'sb_type' => SeoBlog::TYPE_ARTICLE
                ])->delete();
                $article->delete();
            }
            return response()->json([
                'code' => 200
            ]);
        }
    }
}
