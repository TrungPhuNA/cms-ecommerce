<?php

namespace Core\Admin\Http\Controllers\Blog;

use App\Models\Blog\Article;
use App\Models\Blog\Menu;
use App\Models\Blog\SeoBlog;
use App\Service\Menus\MenusService;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use App\Http\Requests\Admin\AdminMenuRequest;
use Core\Admin\Services\RenderUrlSeoBlogServices;
use Illuminate\Http\Request;

class CmsMenuController extends CmsAdminController
{
    public function index()
    {
        MenusService::getInstance()->recursive(0, 1, $menus);
        $viewData = [
            'menus' => $menus,
        ];
        return view('admin::pages.blog.menu.index', $viewData);
    }

    public function create()
    {
        MenusService::getInstance()->recursive(0, 1, $menus);
        $menus    = $menus ?? [];
        $articles = Article::select('id', 'a_name')->orderByDesc('id')->get();

        return view('admin::pages.blog.menu.create', compact('menus', 'articles'));
    }

    public function store(AdminMenuRequest $request)
    {
        $data                   = $request->except('_token', 'articles','mn_position_2','mn_position_1');
        $data['created_at']     = Carbon::now();
        $data['mn_article_hot'] = json_encode($request->articles ?? []);
        if ($request->mn_position_1) $data['mn_position_1'] = 1;
        if ($request->mn_position_2) $data['mn_position_2'] = 1;

        $id                     = Menu::insertGetId($data);
        if ($id) {
            $this->showSuccessMessages();
            RenderUrlSeoBlogServices::renderUrlBLog($request->mn_slug, SeoBlog::TYPE_MENU, $id);
            return redirect()->back();
        }
        $this->showErrorMessages();
        return redirect()->back();
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        MenusService::getInstance()->recursive(0, 1, $menus);
        $articles    = Article::select('id', 'a_name')->orderByDesc('id')->get();
        $articlesOld = json_decode($menu->mn_article_hot, true);
        $viewData    = [
            'menu'        => $menu,
            'menus'       => $menus ?? [],
            'articles'    => $articles,
            'articlesOld' => $articlesOld
        ];

        return view('admin::pages.blog.menu.update', $viewData);
    }

    public function update(AdminMenuRequest $request, $id)
    {
        $data                   = $request->except('_token', 'articles','mn_position_2','mn_position_1');
        $data['updated_at']     = Carbon::now();

        if ($request->mn_position_1) {
            $data['mn_position_1'] = 1;
        }else{
            $data['mn_position_1'] = 0;
        }
        if ($request->mn_position_2) {
            $data['mn_position_2'] = 1;
        }else{
            $data['mn_position_2'] = 0;
        }
        $data['mn_article_hot'] = json_encode($request->articles ?? []);

        Menu::findOrFail($id)->update($data);
        RenderUrlSeoBlogServices::renderUrlBLog($request->mn_slug, SeoBlog::TYPE_MENU, $id);
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $menu = Menu::find($id);
            SeoBlog::where([
                'sb_md5'  => md5($menu->mn_slug),
                'sb_type' => SeoBlog::TYPE_MENU
            ])->delete();
            if ($menu) {
                $menu->delete();
            }
            return response()->json([
                'code' => 200
            ]);
        }
    }
}
