<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruments extends Model
{
    protected $primaryKey = 'instrumentId';
    protected $fillable = ['instrumentId', 'instrumentName', 'description', 'imagepath', 'category', 'price'];
}
