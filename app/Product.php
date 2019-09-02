<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['productname', 'description', 'imagepath', 'price'];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
