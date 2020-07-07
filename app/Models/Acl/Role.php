<?php

namespace App\Models\Acl;

class Role extends \Spatie\Permission\Models\Role
{
    protected $guard_name = 'admins';
}

