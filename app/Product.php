<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'image', 'category_id'];
    public function categories()
    {
        return $this->belongsToMany('App\ProductCategory', 'category_id', 'id');
    }

    public function details()
    {
        return $this->hasMany('App\ProductDetail', 'product_id', 'id');
    }
}
