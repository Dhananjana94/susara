<?php

namespace App\Http\Controllers;

use App\Instruments_ex;
use DB;
use Illuminate\Http\Request;

// use App\Http\Request;

class Instruments_exController extends Controller
{
    public function getIndex(){

      $instruments_ex = Instruments_ex::all();
      // $products = DB::select("select * from products where productname='DD-65'");
      // return $products;
      return view('instrument.percution', ['instruments_ex' => $instruments_ex]);
      // return view('products.percution')->with('products', $products);
    }
    // public function getAddToCart(Request $request, $instrumentId){
    //   $instrument = Instruments::find($instrumentId);
    //
    // }

}
