@extends('layout.main')

@section('title', 'Susara Music Center | Shopping Cart')
@section('content')
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{asset("js/checkout.js")}}"></script>
<script type="text/javascript" src="{{asset("js/checkoutform.js")}}"></script>
<script src="https://www.paypalobjects.com/api/checkout.js">></script>
<script type="text/javascript" src="{{asset("js/paypalbutton.js")}}"></script>
    <!--side bar -->
    <div class="col-3">

    </div>
        <div class="container-fluid">
            <div class="row d-flex d-md-block flex-nowrap wrapper">
                <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width " id="sidebar">
                        <div class="list-group border-0 card text-center text-md-left">

                            <a href="#menu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                                aria-expanded="false"><i class="fa fa-user-circle-o"></i> <span class="d-none d-md-inline">Join</span> </a>

                                <div class="collapse" id="menu">
                                        <a href="#" class="list-group-item" data-parent="#menu1">Login</a>

                                        <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Sign-up</a>
                                            <div class="collapse" id="menu1sub1">
                                                <a href="#" class="list-group-item" data-parent="#menu1sub1">Customer</a>
                                                <a href="#" class="list-group-item" data-parent="#menu1sub1">Student</a>

                                            </div>

                                    </div>

                            <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                                aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="d-none d-md-inline">Products</span> </a>

                            <div class="collapse" id="menu1">
                                <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Instrument </a>
                                <div class="collapse" id="menu1sub1">
                                    <a href="#" class="list-group-item" data-parent="#menu1sub1">Percution</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1sub1">Strings</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1sub1">wind</a>
                                    <a href="#menu1sub1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Others
                                    </a>
                                    <!--If neccassary u can add sub-sub categories here-->
                                    <div class="collapse" id="menu1sub1sub1">
                                        <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem </a>
                                        <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem </a>
                                    </div>

                                </div>
                                <a href="#" class="list-group-item" data-parent="#menu1">Electronics</a>
                                <a href="#" class="list-group-item" data-parent="#menu1">Parts</a>
                            </div>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-book"></i> <span class="d-none d-md-inline">Tutorials</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-phone"></i> <span class="d-none d-md-inline">Contact</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Tuner</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Message</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Add</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Events</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Add</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-bar-chart-o"></i> <span class="d-none d-md-inline">Add</span></a>
                        <!-- Shopping Cart Link-->
                        <a href="{{ route('shop.shoppingCart') }}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
                          <i class="fa fa-shopping-cart"></i> Shopping Cart
                          <span class="badge badge-pill badge-light">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                        </a>
                    </div>
                </div>
                <main class="col-md-10 col px-5 pl-md-2 pt-2 main mx-auto">

                    <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
                    <div class="page-header lead">
                        <h2>SUSARA MUSIC</h2>
                    </div>
                    <p class="lead">Life is the song Love is the melody.</p>
                    <hr>
                        <!--carousel-->
            <div class="container">
              <h1 class="text-center">CheckOut</h1><br>
                <!-- CheckOut Start -->
                  <div class="row">
                      <div class="container">
                        <div class="row">
                              <!-- Summery of Cart Start-->
                                <div class="col-md-4 order-md-2 mb-4">
                                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Your cart</span>
                                    <span class="badge badge-secondary badge-pill">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                                  </h4>
                                  @if(Session::has('cart'))
                                  <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                      <div>
                                        <h6 class="my-0">DTX400K</h6>
                                        <small class="text-muted">Percussion product</small>
                                      </div>
                                      <span class="text-muted">LKR 23</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                      <div>
                                        <h6 class="my-0">GM2FS</h6>
                                        <small class="text-muted">Percussion product</small>
                                      </div>
                                      <span class="text-muted">LKR 37</span>
                                    </li>
                                    <!-- <li class="list-group-item d-flex justify-content-between lh-condensed">
                                      <div>
                                        <h6 class="my-0">Third item</h6>
                                        <small class="text-muted">Brief description</small>
                                      </div>
                                      <span class="text-muted">LKR 5</span>
                                    </li> -->
                                    <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                                      <div class="text-success">
                                        <h6 class="my-0">Promo code</h6>
                                        <small>EXAMPLECODE</small>
                                      </div>
                                      <span class="text-success">-$5</span>
                                    </li> -->
                                    <li class="list-group-item d-flex justify-content-between">
                                      <span>Total (LKR)</span>
                                      <strong>LKR 60</strong>
                                    </li>
                                  </ul>
                                  @endif

                                  <form class="card p-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Promo code">
                                      <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              <!-- Summery of Cart End-->
                                <div class="col-md-8 order-md-1">
                                  <!-- Billing Address Start -->
                                  <div id="charge-error" class="alert {{ !Session::has('error') ? 'hidden' : '' }}" role="alert">
                                    {{ Session::get('error') }}
                                    <!-- <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again. -->
                                  </div>
                                  <!-- Checkout Form Start -->
                                  <!-- <div class="container"> -->
                                    <div class="col-md-12 order-md-1">
                                      <h4 class="mb-3">Billing and Shipping Address</h4>
                                      <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                                        <div class="row">

                                          <div class="col-md-6 mb-3">
                                            <label for="firstName">First name</label>
                                            <input type="text" class="form-control" id="first-name" placeholder="First Name" value="" required>
                                            <div class="invalid-feedback">
                                              Valid first name is required.
                                            </div>
                                          </div>

                                          <div class="col-md-6 mb-3">
                                            <label for="firstName">Last name</label>
                                            <input type="text" class="form-control" id="last-name" placeholder="Last Name" value="" required>
                                            <div class="invalid-feedback">
                                              Valid last name is required.
                                            </div>
                                          </div>

                                          <div class="col-md-12 mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                                            <div class="invalid-feedback">
                                              Please enter a valid email address for shipping updates.
                                            </div>
                                          </div>

                                          <div class="col-md-12 mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                            <div class="invalid-feedback">
                                              Please enter your shipping address.
                                            </div>
                                          </div>
                                        </div>

                                        <hr class="mb-4">
                                        <h4 class="mb-3">Payment Options</h4>

                                        <div class="d-block my-3">
                                          <div class="custom-control custom-radio">
                                            <input id="credit-card" name="paymentMethod" type="radio" class="custom-control-input" onclick="show2();" checked required>
                                            <label class="custom-control-label" for="credit-card">
                                              &nbsp;&nbsp;&nbsp;&nbsp;
                                              <img src="{{asset("dist/img/checkout-img/credit-card.png")}}" alt="">
                                              Credit card
                                            </label>
                                          </div>

                                          <div class="custom-control custom-radio">
                                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" onclick="show1();" required>
                                            <label class="custom-control-label" for="paypal">
                                              &nbsp;&nbsp;&nbsp;&nbsp;
                                              <img src="{{asset("dist/img/checkout-img/paypal.png")}}" alt="">
                                              PayPal
                                            </label>
                                          </div>
                                        </div>


                                        <hr class="mb-4">
                                        <h4 class="mb-3">Payment</h4>

                                        <div class="row" id="stripe-method">
                                          <div class="col-md-6 mb-3">
                                            <label for="card-name">Name on card</label>
                                            <input type="text" class="form-control" id="card-name" placeholder="Name on card" required>
                                            <small class="text-muted">Full name as displayed on card</small>
                                            <div class="invalid-feedback">
                                              Name on card is required
                                            </div>
                                          </div>

                                          <div class="col-md-6 mb-3">
                                            <label for="card-number">Credit card number</label>
                                            <input type="text" class="form-control" id="card-number" placeholder="Card number" required>
                                            <div class="invalid-feedback">
                                              Credit card number is required
                                            </div>
                                          </div>

                                          <!-- <div class="row"> -->
                                            <div class="col-md-4 mb-3">
                                              <label for="card-expiry-month">Expiration Month</label>
                                              <input type="text" class="form-control" id="card-expiry-month" placeholder="MM" required>
                                              <div class="invalid-feedback">
                                                Expiration month required
                                              </div>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                              <label for="card-expiry-year">Expiration Year</label>
                                              <input type="text" class="form-control" id="card-expiry-year" placeholder="YYYY" required>
                                              <div class="invalid-feedback">
                                                Expiration year required
                                              </div>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                              <label for="card-cvc">CVC</label>
                                              <input type="text" class="form-control" id="card-cvc" placeholder="CVC" required>
                                              <div class="invalid-feedback">
                                                Security code required
                                              </div>
                                            </div>
                                          </div>
                                            <div class="col-md-12 mb-3" id="stripe-button">
                                              <hr class="mb-4">
                                              {{ csrf_field() }}
                                              <button class="btn btn-primary btn-lg" type="submit"><img src="{{asset("dist/img/checkout-img/credit-card.png")}}" alt=""> Confirm & Pay</button>&nbsp;&nbsp;
                                              <!-- <button class="btn btn-primary btn-lg" type="submit"><img src="{{asset("dist/img/checkout-img/paypal.png")}}" alt=""> Confirm & Pay with PayPal</button> -->
                                              <!-- <a href="{{ route('shop.shopping-cart') }}">Paypal</a> -->
                                            </div>
                                            <div id="paypal-button"></div>
                                          <!-- </div> -->

                                      </form>
                                    </div>
                                  <!-- </div> -->

                                  <!-- Checkout Form End -->
                                </div>
                              </div>
                      </div>
                  </div>
                <!-- CheckOut End -->
            </div>
            <!--carousel end -->
    <br>
    <br>
    @endsection

    @section('scripts')
      <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
      <script type="text/javascript" src="{{ URL::to('js/checkout.js') }}"></script>
      <script type="text/javascript" src="{{ URL::to('js/checkoutform.js') }}"></script>
    @endsection
