<?php

namespace Core\Admin\Http\Controllers\Marketing;

use App\Http\Requests\AdminSendEmailGuestRequest;
use App\Models\Guest;
use App\Models\Marketing\EmailUser;
use App\Models\Marketing\SendEmailUser;
use App\Models\Marketing\TemplateEmail;
use Carbon\Carbon;
use Core\Admin\Http\Controllers\CmsAdminController;

class CmsTemplateEmailSendUserController extends CmsAdminController
{
    public function index()
    {
        $sendEmailUsers = SendEmailUser::with('author:id,name', 'template:id,em_title')
            ->orderByDesc('id')
            ->paginate(20);
        $viewData       = [
            'sendEmailUsers' => $sendEmailUsers
        ];
        return view('admin::pages.marketing.send_email.index', $viewData);
    }

    public function create()
    {
        $templates = TemplateEmail::orderByDesc('id')->select('id', 'em_title')->get();
        $guests    = Guest::orderByDesc('id')->select('id', 'g_name', 'g_email')->get();

        $viewData = [
            'templates' => $templates,
            'guests'    => $guests
        ];
        return view('admin::pages.marketing.send_email.create', $viewData);
    }

    public function store(AdminSendEmailGuestRequest $request)
    {
        $data                   = $request->except('_token', 'seu_user_id');
        $data['created_at']     = Carbon::now();
        $data['seu_author_id']  = get_data_user('admins');
        $data['seu_total_user'] = count($request->seu_user_id ?? 0);
        $id                     = SendEmailUser::insertGetId($data);
        if ($id) {
            $this->showSuccessMessages();
            $this->syncDataUser($id, $users = $request->seu_user_id);
        }

        return redirect()->back();
    }

    protected function syncDataUser($idSendEmail, $users = array())
    {
        if (!empty($users)) {
            foreach ($users as $user) {
                EmailUser::insert([
                    'eu_user_id'       => $user,
                    'eu_send_email_id' => $idSendEmail
                ]);
            }
        }

    }
}
