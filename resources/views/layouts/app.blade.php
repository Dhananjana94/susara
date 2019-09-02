<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Susara','Susara Music Center') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config( 'Susara Music Center') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                    
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>$nbsp

                        <li class="nav-item">
                                <a class="text-white" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>$nbsp
                        @guest

                            <li class="nav-item">
                                <a class="text-white" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                            </li>$nbsp
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="text-white" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('edit.profile') }}">
                                        {{ __('Edit Profile') }}
                                    </a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container">
            @include('layouts.partials._alert')
        </div>
        
            @yield('content')
        </main>
    </div>

    </div>
   

                            <div class="container-fluid">
                                <footer class="page-footer font-small bg-dark pt-4">

                                        <!-- Footer Links -->
                                        <div class="container text-center text-md-left">

                                          <!-- Footer links -->
                                          <div class="row text-center text-md-left mt-3 pb-3">

                                            <!-- Grid column -->
                                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-light">
                                              <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
                                              <p>Implement a web based music-learning environment with instrument simulator and an online instrument retail system. We mainly target to
                                                  improve knowledge about music and vend music instrument to customer.
                                                </p>
                                            </div>
                                            <!-- Grid column -->

                                            <hr class="w-100 clearfix d-md-none">

                                            <!-- Grid column -->
                                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3  text-light">
                                              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                                              <p>
                                                <a href="#!">Percution</a>
                                              </p>
                                              <p>
                                                <a href="#!">Strings</a>
                                              </p>
                                              <p>
                                                <a href="#!">Wind</a>
                                              </p>
                                              <p>
                                                <a href="#!">Electronics</a>
                                              </p>
                                            </div>
                                            <!-- Grid column -->

                                            <hr class="w-100 clearfix d-md-none">

                                            <!-- Grid column -->
                                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3  text-light">
                                              <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                                              <p>
                                                <a href="#!">Your Account</a>
                                              </p>
                                              <p>
                                                <a href="#!">Become an Affiliate</a>
                                              </p>
                                              <p>
                                                <a href="#!">Shipping Rates</a>
                                              </p>
                                              <p>
                                                <a href="#!">Help</a>
                                              </p>
                                            </div>

                                            <!-- Grid column -->
                                            <hr class="w-100 clearfix d-md-none">

                                            <!-- Grid column -->
                                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3  text-light">
                                              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                                              <p>
                                                <i class="fa fa-home mr-3"></i> susara music, Dambula road,kurunegala</p>
                                              <p>
                                                <i class="fa fa-envelope mr-3"></i>susara@gmail.com</p>
                                              <p>
                                                <i class="fa fa-phone mr-3"></i>+94 776960232</p>
                                              <p>
                                                <i class="fa fa-print mr-3"></i>+94 37 567 89</p>
                                            </div>
                                            <!-- Grid column -->

                                          </div>
                                          <!-- Footer links -->

                                          <hr>

                                          <!-- Grid row -->
                                          <div class="row d-flex align-items-center">

                                            <!-- Grid column -->
                                            <div class="col-md-7 col-lg-8">

                                              <!--Copyright-->
                                              <p class="text-center text-md-left">© 2019 Copyright:
                                                <a href="#">
                                                  <strong > NDW Creations</strong>
                                                </a>
                                              </p>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-md-5 col-lg-4 ml-lg-0">

                                              <!-- Social buttons -->
                                              <div class="text-center text-md-right">
                                                <ul class="list-unstyled list-inline">
                                                  <li class="list-inline-item">
                                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                      <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                      <i class="fa fa-twitter"></i>
                                                    </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                      <i class="fa fa-google-plus"></i>
                                                    </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                      <i class="fa fa-linkedin"></i>
                                                    </a>
                                                  </li>
                                                </ul>
                                              </div>

                                            </div>
                                            <!-- Grid column -->

                                          </div>
                                          <!-- Grid row -->

                                        </div>
                                        <!-- Footer Links -->

                                      </footer>
                                      <!-- Footer -->
                            </div>
    
    </div>
</body>
</html>
