<?php

namespace App\Http\Controllers;

use App\Instruments;
use App\Cart;
use DB;
use Illuminate\Http\Request;
use Session;

// use App\Http\Request;

class InstrumentsController extends Controller
{
    public function getIndex(){

      $instruments = Instruments::all();
      // $products = DB::select("select * from products where productname='DD-65'");
      // return $products;
      return view('instrument.percution', ['instruments' => $instruments]);
      // return view('products.percution')->with('products', $products);
    }
    public function getAddToCart(Request $request, $instrumentId){
      $instrument = Instruments::find($instrumentId);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($instrument,$instrument->instrumentId);

      $request->session()->put('cart', $cart);
      // dd($request->session()->get('cart'));//to show data in browser
      return redirect()->route('instrument.percution');
    }

    //cart reduce by one
    public function getReduceByOne($instrumentId){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceQtyByOne($instrumentId);

      if(count($cart->items) > 0){
        Session::put('cart', $cart);
      }else{
        Session::forget('cart');
      }
      return redirect()->route('shop.shoppingCart');//redirect routes to /shopping-cart
    }

    //reeduce all items cart
    public function getRemoveAllItem($instrumentId){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItemAll($instrumentId);

      if(count($cart->items) > 0){
        Session::put('cart', $cart);
      }else{
        Session::forget('cart');
      }

      return redirect()->route('shop.shoppingCart');//redirect routes to /shopping-cart
    }

    public function getCart(){
      if (!Session::has('cart')) {
        return view('shop.shopping-cart', ['instruments' => null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      // dd($request->session()->get('cart'));//to show data in browser
      return view('shop.shopping-cart', ['instruments' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }

    public function removeFromCart(Request $request, $instrumentId){
      $instrument = Instruments::find($instrumentId);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->destroy($instrument,$instrument->instrumentId);

      $request->session()->put('cart', $cart);
      // dd($request->session()->get('cart'));//to show data in browser
      return redirect()->route('shop.shopping-cart');
    }


}
