<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    use HasFactory;
    protected $primaryKey='category_code';
    protected $guarded = [];
    public $timestamps = true;

    public function products()
    {
        return $this->hasMany('App\products','product_category','category_code');
    }
}
