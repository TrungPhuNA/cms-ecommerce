<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
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

    public function category()
    {
        return $this->belongsTo(Category::class,'pro_category_id');
    }

    public function getStatus()
    {
        return Arr::get($this->status, $this->pro_status,'[N\A]');
    }
}
