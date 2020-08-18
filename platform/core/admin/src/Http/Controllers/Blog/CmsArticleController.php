<?php

namespace Core\Admin\Http\Controllers\Blog;

use App\Http\Requests\AdminArticleRequest;
use App\Http\Requests\AdminMenuRequest;
use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use App\Models\Blog\SeoBlog;
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
        return view('admin::pages.blog.article.create', compact('menus'));
    }

    public function store(AdminArticleRequest $request)
    {
        $data               = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $id                 = Article::insertGetId($data);
        if ($id) {
            RenderUrlSeoBlogServices::renderUrlBLog($request->a_slug, SeoBlog::TYPE_ARTICLE, $id);
            $this->showSuccessMessages();
            return redirect()->back();
        }
        $this->showErrorMessages();
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        MenusService::getInstance()->recursive(0, 1, $menus);
        $viewData = [
            'article' => $article,
            'menus'   => $menus ?? []
        ];
        return view('admin::pages.blog.article.update', $viewData);
    }

    public function update(AdminArticleRequest $request, $id)
    {
        $data               = $request->except('_token');
        $data['updated_at'] = Carbon::now();
        Article::findOrFail($id)->update($data);
        RenderUrlSeoBlogServices::renderUrlBLog($request->a_slug, SeoBlog::TYPE_ARTICLE, $id);
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()){
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
