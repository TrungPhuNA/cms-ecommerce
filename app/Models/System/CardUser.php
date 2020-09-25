<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;

class CardUser extends Model
{
    protected $guarded = [''];
    protected $table = 'card_user';

    public function bank()
    {
        return $this->belongsTo(Bank::class,'cu_bank_id');
    }
}
