<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::post('/addTutorial', 'lessonController@add');
Auth::routes(['verify' => true]);
 Route::get('/', 'FrontController@index' )->name('home');
 Route::get('/percution', 'FrontController@percution' )->name('percution');
 Route::get('/percution', [
   'uses' => 'InstrumentsController@getIndex',
   // 'uses' => 'Instruments_exController@getIndex',
   'as' => 'instrument.percution'
 ]);
 Route::get('/dd65', 'FrontController@percution_dd65' );

 Route::get('/add-to-cart/{instrumentId}', [
   'uses' => 'InstrumentsController@getAddToCart',
   'as' => 'instrument.addToCart'
 ]);

 //Cart route and link to CartController
  Route::get('/shopping-cart', [
    'uses' => 'InstrumentsController@getCart',
    'as' => 'shop.shoppingCart'
  ]);

//Cart Qty reduce by one
 Route::get('/reduce/{instrumentId}', [
   'uses' => 'InstrumentsController@getReduceByOne',
   'as' => 'instrument.reduceQtyByOne'
 ]);

 //Cart Qty reduce all
  Route::get('/remove-all/{instrumentId}', [
    'uses' => 'InstrumentsController@getRemoveAllItem',
    'as' => 'instrument.removeAll'
  ]);


 //Checkout route and link to CartController
  Route::get('/checkout', [
    'uses' => 'CartController@getCheckout',
    'as' => 'checkout'
  ]);
 // route and link to CheckoutController
 Route::post('/checkout', [
   'uses' => 'CartController@postCheckout',
   'as' => 'checkout'
 ]);
 //PayPal route to CheckoutController
 // Route::get('pay-with-paypal', 'CheckoutController@paywithPaypal')
 Route::get('/pay-with-paypal', ['CheckoutController@paywithPaypal'])->name('shop.shopping-cart');
 //
 // Route::get('/success-payment', ['CheckoutController@successPay'])->name('shop.success-order');


Route::prefix('user')->group(function(){
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/editProfile', 'userProfileController@editUserProfile')->name('edit.profile');
Route::post('/editProfile', 'userProfileController@update')->name('update.profile');
});

Route::prefix('admins')->group(function(){

Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admins.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admins.login.submit');
Route::get('/register', 'Auth\AdminsRegisterController@showRegisterForm')->name('admin.register');
Route::post('/register', 'Auth\AdminsRegisterController@register')->name('admin.register');
Route::get('/addTutorial', 'AdminController@index')->name('admin.dashboard');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
});




Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('tuner/', function () {
  return require public_path('tuner');
});

// Route::get('/tuner', 'CheckoutController@getTuner')->name('tuner.index');

// Route::get('/tuner', function () {
//   return View::make('tuner.index');
// });