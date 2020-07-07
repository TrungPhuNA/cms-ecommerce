<?php

namespace App\Models\Acl;

class Permission extends \Spatie\Permission\Models\Permission
{
    protected $guard_name = 'admins';
}
