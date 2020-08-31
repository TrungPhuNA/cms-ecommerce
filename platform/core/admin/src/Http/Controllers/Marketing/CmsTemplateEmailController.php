<?php

namespace Core\Admin\Http\Controllers\Marketing;

use App\Http\Requests\AdminTemplateEmailRequest;
use App\Models\Marketing\TemplateEmail;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;

class CmsTemplateEmailController extends CmsAdminController
{
    public function index()
    {
        $templates = TemplateEmail::with('author:id,name')->orderByDesc('id')
            ->get();
        $viewData  = [
            'templates' => $templates
        ];
        return view('admin::pages.marketing.template.index', $viewData);
    }

    public function create()
    {
        return view('admin::pages.marketing.template.create');
    }

    public function store(AdminTemplateEmailRequest $request)
    {
        $data                 = $request->except('_token');
        $data['created_at']   = Carbon::now();
        $data['em_author_id'] = get_data_user('admins');
        $id = TemplateEmail::insertGetId($data);
        if( $id) {
            $this->showSuccessMessages();
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $template = TemplateEmail::findOrFail($id);
        return view('admin::pages.marketing.template.update', compact('template'));
    }

    public function update(AdminTemplateEmailRequest $request, $id)
    {
        $template = TemplateEmail::findOrFail($id);
        $data                 = $request->except('_token');
        $data['updated_at']   = Carbon::now();
        $data['em_author_id'] = get_data_user('admins');
        $update = $template->update($data);
        $this->showSuccessMessages();
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $template = TemplateEmail::findOrFail($id);
            $template->delete();
            return response()->json([
                'code' => 200
            ]);
        }
    }
}
