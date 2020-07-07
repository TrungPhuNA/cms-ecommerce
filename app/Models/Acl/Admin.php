<?php

namespace App\Models\Acl;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasRoles;
    protected $guard_name = 'admins';
    protected $guarded = [''];
}
