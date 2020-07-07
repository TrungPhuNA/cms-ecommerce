<?php


namespace Core\Admin\Http\Controllers\Blog;


use App\Http\Requests\AdminTagRequest;
use App\Models\Blog\Menu;
use App\Models\Blog\Tag;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;

class CmsTagController extends CmsAdminController
{
    public function index()
    {
        $tags = Tag::orderByDesc('id')->paginate(20);
        $viewData = [
            'tags' => $tags
        ];
        return view('admin::pages.blog.tag.index', $viewData);
    }

    public function create()
    {
        return view('admin::pages.blog.tag.create');
    }

    public function store(AdminTagRequest $request)
    {
        $data               = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $id                 = Tag::insertGetId($data);
        if ($id) {
            $this->showSuccessMessages();
            return redirect()->back();
        }
        $this->showErrorMessages();
        return  redirect()->back();
    }
}
