@extends('layout.main')

@section('title', 'Susara Music Center | Shopping Cart')
@section('content')
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{asset("js/checkout.js")}}"></script>
<script type="text/javascript" src="{{asset("js/checkoutform.js")}}"></script>
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
                        <h2>Order Successfully</h2>
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
