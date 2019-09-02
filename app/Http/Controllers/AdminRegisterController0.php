<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
//form field validation
use Validator;

//user details authentication
use Auth;

class AdminRegisterController0 extends Controller
{
    public function showRegisterForm(){
        //view register.blade.php inside custom folder
        return view('auth.register'); 
    } 
}