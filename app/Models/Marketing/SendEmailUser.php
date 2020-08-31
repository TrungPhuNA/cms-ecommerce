<?php

namespace App\Models\Marketing;

use App\Models\Acl\Admin;
use Illuminate\Database\Eloquent\Model;

class SendEmailUser extends Model
{
    protected $guarded = [''];
    protected $table = 'send_emails_users';

    public function author()
    {
        return $this->belongsTo(Admin::class,'seu_author_id');
    }

    public function template()
    {
        return $this->belongsTo(TemplateEmail::class,'seu_template_email_id');
    }
}
