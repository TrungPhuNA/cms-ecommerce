<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Menu extends Model
{
    protected $guarded = [''];
    const STATUS_PUBLIC = 3;
    const STATUS_DRAFT = 2;
    const STATUS_PENDING = 1;
    protected $status = [
        self::STATUS_PENDING => [
            'name' => 'Huỷ bỏ',
            'class' => 'btn-danger',
        ],
        self::STATUS_DRAFT => [
            'name' => 'Draft',
            'class' => 'btn-warning',
        ],
        self::STATUS_PUBLIC => [
            'name' => 'Published',
            'class' => 'btn-info',
        ],
    ];

    public function parent()
    {
        return $this->belongsTo(Menu::class,'mn_parent_id','id');
    }

    public function children()
    {
        return $this->hasMany(self::class,'mn_parent_id','id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class,'a_menu_id','id');
    }

    public function getStatus()
    {
        return Arr::get($this->status, $this->mn_status,'[N\A]');
    }
}
