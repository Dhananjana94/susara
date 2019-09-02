<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customerphoneno extends Model
{
    public $table = 'customerphoneno';
    public $timestamps = false;
    protected $primaryKey = 'customerId';
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customerId','phoneNo','nic','email','password','userId'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
