<?php

namespace App\Models\Marketing;

use App\Models\Acl\Admin;
use Illuminate\Database\Eloquent\Model;

class TemplateEmail extends Model
{
    protected $guarded = [''];
    protected $table = 'email_marketing';

    public function author()
    {
        return $this->belongsTo(Admin::class,'em_author_id');
    }
}
