<?php

namespace App\Models\Blog;

use App\Models\Acl\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Article extends Model
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

    public function menu()
    {
        return $this->belongsTo(Menu::class,'a_menu_id');
    }

    public function auth()
    {
        return $this->belongsTo(Admin::class,'a_author_id');
    }

    public function getStatus()
    {
        return Arr::get($this->status, $this->a_status,'[N\A]');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'articles_tags','at_article_id','at_tag_id');
    }
}
