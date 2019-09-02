<?php

namespace App\Http\Controllers;
use App\Customer;
//form field validation
use Validator;

//user details authentication
use Auth;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function showRegisterForm(){
            //view register.blade.php inside custom folder
            return view('custom.register');
    } 

    // public function showRegisterForm(){
    //     //view register.blade.php inside custom folder
    //     return view('custom.register');
    // }
}
