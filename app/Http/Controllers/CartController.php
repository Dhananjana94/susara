<?php

namespace App\Http\Controllers;

use App\Instruments;
use App\Cart;
use DB;
use Illuminate\Http\Request;
use Session;
use Stripe\Charge;
use Stripe\Stripe;

class CartController extends Controller
{
  public function getCart(){
    if(!Session::has('cart')){
      return view('shop.shopping-cart');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    return view('shop.shopping-cart', ['instruments' => $cart->items]);
    // return view('shop.shopping-cart', ['instruments' => $cart->items, 'totalPrice' => $cart->totalPrice]);
  }
  public function getCheckout(){
    if(!Session::has('cart')){
      return view('shop.shopping-cart');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    // $total = $cart->totalPrice;
    return view('shop.checkout');
    // return view('shop.checkout', ['total' => $total]);
  }
  public function postCheckout(Request $request){
    if(!Session::has('cart')){
      return redirect()->route('shop.shoppingCart');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);

    Stripe::setApiKey('sk_test_1gkBB5ncxjWgDNBXNlAGAM9U00udNfGFo6');
    try {
      \Stripe\Charge::create([
        "amount" => $cart->totalPrice * 100,
        "currency" => "usd",
        "source" => $request->input('stripeToken'), // obtained with Stripe.js
        "description" => "Test Charge"
      ]);
    } catch (\Exception $e) {
      // return redirect->route('checkout')->with('error', $e->getMessage());
    }
    Session::forget('cart');
    return redirect()->route('shop.shoppingCart')->with('success', 'Successfully Purchased products!');

  }
}
