<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected  $guarded = [''];

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class,'av_attribute_id');
    }
}
