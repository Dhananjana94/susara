<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function IndexAboutUs(){

    return view('aboutUs');
   }

   public function IndexContact(){

    return view('contactUs');
   }

   public function Add(){

      return view('admin/AddProduct');
     }
}


