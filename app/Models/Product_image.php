<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    //
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = true;
    public $incrementing = true;
}
