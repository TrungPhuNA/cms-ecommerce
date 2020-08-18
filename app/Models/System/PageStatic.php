<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class PageStatic extends Model
{
    protected $table = 'pages_static';
    protected $guarded = [''];

    const SEO_INDEX    = 1;
    const SEO_NO_INDEX = 0;

    protected $seo = [
        self::SEO_NO_INDEX => [
            'name'  => 'No Index',
            'class' => 'btn-danger',
        ],
        self::SEO_INDEX    => [
            'name'  => 'Index',
            'class' => 'btn-warning',
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->seo, $this->ps_seo,'[N\A]');
    }
}
