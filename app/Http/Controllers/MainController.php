<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//form field validation
use Validator;

//user details authentication
use Auth;

class MainController extends Controller
{
    function index(){

        return view('login');
    }

    //to receive login form request

    function checklogin(Request $request){
        //if following requirements are nnot fullfilled, the page will redirected into login page
        $this->validate($request,[
            //'username'      =>  'required|username',
            'password'      =>  'required|alphaNum|min:3'
        ]);

        
        $user_data = array(
            'username'      =>  $request->get('username'),
            'password'      =>  $request->get('password')
        );

        //if all validations are passed if block will be executed
        if(Auth::attempt($user_data)){
            return redirect('main/successlogin');


        }else{
            return back()->with('error','Wrong Login Details');
        }

    } 
    
    
    function successlogin(){

        return view('successlogin');
    }

    function logout(){
        //redirect user to main login page after logged out
        Auth::logout();
        return redirect('main');
    }
}