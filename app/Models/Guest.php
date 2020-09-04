<?php

namespace App\Models;

use App\Models\Marketing\SendEmailUser;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = [''];

    public function sendEmail()
    {
        return $this->belongsToMany(SendEmailUser::class,'emails_users','eu_user_id','eu_send_email_id');
    }
}
