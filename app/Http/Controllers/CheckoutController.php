<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class CheckoutController extends Controller
{
<<<<<<< HEAD
//     public function successPay(Request $request){
//       return "Order Complete"
//     }
//
//     public function paywithPaypal(){
//       $provider = new AdaptivePayments;     // To use adaptive payments.
//
//       $data = [];
//       $data['items'] = [];
//
//       foreach (Cart::content() as $key->$cart) {
//         $itemDetail=[
//           'name' => $cart->name,
//           'price' => $cart->price,
//           'qty' => $cart->qty
//         ];
//         $data['items'][]=$itemDetail;
//       }
//
//       $data['invoice_id'] = \uniqid();
//       $data['invoice_description'] = "test invoice";
//       $data['return_url'] = route('shop.success-order');
//       $data['cancel_url'] = url('/test');
//       $data['total'] = Cart::total();
//
//       $response = $provider->setExpressCheckout($data);
//
//       // This will redirect user to PayPal
//       return redirect($response['paypal_link']);
//
// // //give a discount of 10% of the order amount
// // $data['shipping_discount'] = round((10 / 100) * $total, 2);
//
//     }
=======
    // public function getTuner(){
    //   return view('tuner.index.blade.php');
    // }
>>>>>>> 1b22dfd303258f9181b923d71911592406d55339
}
