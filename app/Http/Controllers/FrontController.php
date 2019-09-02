<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
      return view('front.home');
    }
    public function percution(){
      return view('instrument.percution');
    }
    public function percution_dd65(){
      return view('percussion.dd65');
    }
}
