<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruments_ex extends Model
{
    protected $fillable = ['instrumentId', 'category', 'price', 'adminId'];
}
