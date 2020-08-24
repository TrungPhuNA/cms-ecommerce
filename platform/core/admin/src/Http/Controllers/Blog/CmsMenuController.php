<?php

namespace Core\Admin\Http\Controllers\Blog;

use App\Http\Requests\AdminMenuRequest;
use App\Models\Blog\Menu;
use App\Models\Blog\SeoBlog;
use App\Service\Menus\MenusService;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
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
         $menus = $menus ?? [];
        return view('admin::pages.blog.menu.create', compact('menus'));
    }

    public function store(AdminMenuRequest $request)
    {
        $data               = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $id                 = Menu::insertGetId($data);
        if ($id) {
            $this->showSuccessMessages();
            RenderUrlSeoBlogServices::renderUrlBLog($request->mn_slug, SeoBlog::TYPE_MENU, $id);
            return redirect()->back();
        }
        $this->showErrorMessages();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $menu     = Menu::findOrFail($id);
        MenusService::getInstance()->recursive(0, 1, $menus);
        $viewData = [
            'menu'  => $menu,
            'menus' => $menus ?? []
        ];

        return view('admin::pages.blog.menu.update', $viewData);
    }

    public function update(AdminMenuRequest $request, $id)
    {
        $data               = $request->except('_token');
        $data['updated_at'] = Carbon::now();

        Menu::findOrFail($id)->update($data);
        RenderUrlSeoBlogServices::renderUrlBLog($request->mn_slug, SeoBlog::TYPE_MENU, $id);
        $this->showSuccessMessages('Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()){
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
