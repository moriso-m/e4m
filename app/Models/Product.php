<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $guarded = [];
    public $timestamps = true;
    public $incrementing = false;

    public function category()
    {
        return $this->belongsTo('App\Product_category','product_category');
    }

    public function images()
    {
        return $this->hasOne('App\Product_image','product_id','product_id')->withDefault();
    }
}
