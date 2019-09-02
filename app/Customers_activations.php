<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers_activations extends Model
{
    protected $table = 'customers_activations';
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customerId','token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
}
