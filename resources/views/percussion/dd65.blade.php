@extends('layout.main')

@section('title', 'Percussion Products - DD-65')
@section('content')
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
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
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
              <div class="row">
                <div class="col-6">
                  <img src="{{asset("dist/img/percussion-img/percussion-product-1.jpg")}}" alt="" class="left-column-img">
                </div>
                <div class="col-6">
                  <!-- Product Description -->
                  <div class="product-description">
                    <span>Drums & Percussions</span>
                    <h1>DD-65</h1>
                    <p>Designed from a drummer's point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.</p>
                  </div>

                  <!-- Product Pricing -->
                  <div class="product-price">
                    <span>Price: 148$</span>
                  </div><br>
                  <a href="#"><button type="button" class="btn btn-outline-primary btn-lg"><img src="{{asset("dist/img/buy.png")}}" alt=""> Buy Now</button></a>&nbsp;
                  <a href="#"><button type="button" class="btn btn-outline-success btn-lg"><img src="{{asset("dist/img/cart-icon.png")}}" alt=""> Add to Cart</button></a>
                  <br>
                  <br>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Seller</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">DD-65 is a digital drumkit with eight touch sensitive pads and two foot pedals. High quality drum and wide variety of percussion sounds from all over the world are mixed with orchestra voices to provide a wide range of musical opportunities. AUX IN jack lets you connect and MP3 player and play along with your favorite music.</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                  </div>
                </div>
              </div> <!--row-->
              </div>
            </div> <!--end container-->
            <!--carousel end -->


    <br>
    <br>
    @endsection
