<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class SeoBlog extends Model
{
    protected $table = 'seo_blogs';
    protected $guarded = [''];

    const TYPE_TAG = 1;
    const TYPE_MENU = 2;
    const TYPE_ARTICLE = 3;

    const SLUG_TAG = 't';
    const SLUG_MENU = 'm';
    const SLUG_ARTICLE = 'a';
}
