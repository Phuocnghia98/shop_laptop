@php

@endphp
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from event-theme.com/themes/html/smarttech/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jul 2021 08:45:21 GMT -->

<head>
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.html') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.html') }}" type="image/x-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layout.style')
    @section('style')
    @show

    <!-- Fonts Online -->
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i') }}"
        rel="stylesheet">


    <!-- JavaScripts -->
    <script src="{{ asset('assets/js/vendors/modernizr.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrap" class="layout-1">

        <!-- Top bar -->
        <div class="top-bar">
            <div class="container">
                <p>Welcome to SmartTech center!</p>
                <div class="right-sec">
                    <ul>
                        <li>

                            @guest
                                @if (Route::has('login2'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login2') }}">{{ __('Login/Register') }}</a>
                                {{-- <a class="nav-link" href="{{ route('login2') }}">{{ @lang('auth.login') }}</a>
                        <a class="nav-link" href="{{ route('login2') }}">{{ trans('auth.login') }}</a> --}}
                            </li>
                            @endif

                            {{-- @if (Route::has('register2'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register2') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout2') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout2') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        </li>
                        <li><a href="#.">Store Location </a></li>
                        <li><a href="#.">FAQ </a></li>
                        <li><a href="#.">Newsletter </a></li>
                        <li>
                            <select class="selectpicker">
                                <option>French</option>
                                <option>German</option>
                                <option>Italian</option>
                                <option>Japanese</option>
                            </select>
                        </li>
                        <li>
                            <select class="selectpicker">
                                <option>(USD)Dollar</option>
                                <option>GBP</option>
                                <option>Euro</option>
                                <option>JPY</option>
                            </select>
                        </li>
                    </ul>
                    <div class="social-top"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i
                                class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a
                            href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i
                                class="fa fa-pinterest"></i></a> </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header>
            <form action="{{ route('search') }}" method="POST">
                @csrf

                <div class="container">

                    <div class="logo"> <a href="{{ Route('index') }}"><img
                                src="{{ asset('assets/images/logo.png') }}" alt=""></a> </div>
                    <div class="search-cate">
                        <input type="search" name="keywords_submit" placeholder="Tìm kiếm sản phẩm">
                        <button class="submit" name="search_item" type="submit"><i class="icon-magnifier"></i></button>
                    </div>

                    <!-- Cart Part -->
                    <ul class="nav navbar-right cart-pop">
                        <li class="dropdown">
                            @php
                                $total = 0;
                                $totalPrice = 0;
                            @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $value)
                                    @php
                                        $total += $value['quantity'];
                                        $totalPrice += $value['price'] * $value['quantity'];
                                    @endphp
                                @endforeach
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><span class="itm-cont"
                                        id="CartTotal">{{ $total }}</span> <i class="flaticon-shopping-bag"></i>
                                    <strong>My Cart</strong> <br>
                                    <span>{{ $total }} item(s) - {{ number_format($totalPrice) }}</span>
                                </a>
                            @endif
                            <ul class="dropdown-menu">
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $value)
                                        <li>
                                            <div class="media-left"> <a href="#." class="thumb"> <img
                                                        src="{{ asset($value['image']) }}" class="img-responsive"
                                                        alt="">
                                                </a> </div>
                                            <div class="media-body"> <a href="#."
                                                    class="tittle">{{ $value['product_name'] }}</a>
                                                <span>{{ $value['price'] }} x {{ $value['quantity'] }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                    <li class="btn-cart"> <a href="{{ route('ShoppingCart') }}"
                                            class="btn-round">View
                                            Cart</a> </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </form>


            <!-- Nav -->
            <nav class="navbar ownmenu">
                <div class="container">

                    <!-- Categories -->
                    <div class="cate-lst"> <a data-toggle="collapse" class="cate-style" href="#cater"><i
                                class="fa fa-list-ul"></i> Our Categories </a>
                        <div class="cate-bar-in">
                            <div id="cater" class="collapse">
                                <ul>
                                    <li><a href="#."> Home Audio & Theater</a></li>
                                    <li><a href="#."> TV & Video</a></li>
                                    <li><a href="#."> Camera, Photo & Video</a></li>
                                    <li class="sub-menu"><a href="#."> Cell Phones & Accessories</a>
                                        <ul>
                                            <li><a href="#."> TV & Video</a></li>
                                            <li><a href="#."> Camera, Photo & Video</a></li>
                                            <li><a href="#."> Cell Phones & Accessories</a>
                                        </ul>
                                    </li>
                                    <li><a href="#."> Headphones</a></li>
                                    <li><a href="#."> Video Games</a></li>
                                    <li class="sub-menu"><a href="#."> Bluetooth & Wireless Speakers</a>
                                        <ul>
                                            <li><a href="#."> TV & Video</a></li>
                                            <li><a href="#."> Camera, Photo & Video</a></li>
                                            <li><a href="#."> Cell Phones & Accessories</a>
                                        </ul>
                                    </li>
                                    <li class="sub-menu"><a href="#."> Gaming Console</a>
                                        <ul>
                                            <li><a href="#."> TV & Video</a></li>
                                            <li><a href="#."> Camera, Photo & Video</a></li>
                                            <li><a href="#."> Cell Phones & Accessories</a>
                                        </ul>
                                    </li>
                                    <li><a href="#."> Computers & Tablets</a></li>
                                    <li><a href="#."> Monitors</a></li>
                                    <li><a href="#."> Home Appliances</a></li>
                                    <li><a href="#."> Office Supplies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Navbar Header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#nav-open-btn" aria-expanded="false"> <span><i
                                    class="fa fa-navicon"></i></span> </button>
                    </div>
                    <!-- NAV -->
                    <div class="collapse navbar-collapse" id="nav-open-btn">
                        <ul class="nav">
                            <li class="dropdown megamenu active"> <a href="index-2.html" class="dropdown-toggle"
                                    data-toggle="dropdown">Home </a>
                                <div class="dropdown-menu animated-2s fadeInUpHalf">
                                    <div class="mega-inside scrn">
                                        <ul class="home-links">
                                            <li><a href="index-2.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-1.jpg') }}" alt="">
                                                    <span>Home Version 1</span></a></li>
                                            <li><a href="index-3.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-2.jpg') }}" alt="">
                                                    <span>Home Version 2</span></a> </li>
                                            <li><a href="index-4.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-3.jpg') }}" alt="">
                                                    <span>Home Version 3</span></a></li>
                                            <li><a href="index-5.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-4.jpg') }}" alt="">
                                                    <span>Home Version 4</span></a></li>
                                            <li><a href="index-6.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-5.jpg') }}" alt="">
                                                    <span>Home Version 5</span></a></li>
                                            <li><a href="index-7.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-6.jpg') }}" alt="">
                                                    <span>Home Version 6</span></a></li>
                                            <li><a href="index-8.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-7.jpg') }}" alt="">
                                                    <span>Home Version 7</span></a></li>
                                            <li><a href="index-9.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-8.jpg') }}" alt="">
                                                    <span>Home Version 8</span></a></li>
                                            <li><a href="index-10.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-9.jpg') }}" alt="">
                                                    <span>Home Version 9</span></a></li>
                                            <li><a href="index-11.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-10.jpg') }}" alt="">
                                                    <span>Home Version 10</span></a></li>
                                            <li><a href="index-12.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-11.jpg') }}" alt="">
                                                    <span>Home Version 11</span></a></li>
                                            <li><a href="index-13.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-12.jpg') }}" alt="">
                                                    <span>Home Version 12</span></a></li>
                                            <li><a href="index-14.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-13.jpg') }}" alt="">
                                                    <span>Home Version 13</span></a></li>
                                            <li><a href="index-15.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-14.jpg') }}" alt="">
                                                    <span>Home Version 14</span></a></li>
                                            <li><a href="index-16.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-15.jpg') }}" alt="">
                                                    <span>Home Version 15</span></a></li>
                                            <li><a href="index-17.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-16.jpg') }}" alt="">
                                                    <span>Home Version 16</span></a></li>
                                            <li><a href="index-18.html"><img class="img-responsive"
                                                        src="{{ asset('assets/images/home-17.jpg') }}" alt="">
                                                    <span>Home Version 17</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown"> <a href="index-2.html" class="dropdown-toggle"
                                    data-toggle="dropdown">Pages </a>
                                <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
                                    <li><a href="{{ Route('About') }}"> About </a></li>
                                    <li><a href="{{ Route('LoginForm') }}"> Login Form </a></li>
                                    <li><a href="#."> Products 3 Columns </a></li>
                                    <li><a href="{{ Route('Products_a4Columns') }}"> Products 4 Columns </a></li>
                                    <li><a href="{{ Route('listProducts') }}"> List Products </a></li>
                                    <li><a href="{{ Route('productDetails') }}"> Product Details </a></li>
                                    <li><a href="{{ Route('ShoppingCart') }}"> Shopping Cart</a></li>
                                    <li><a href="{{ Route('PaymentMethods') }}"> Payment Methods </a></li>
                                    <li><a href="{{ Route('DeliveryMethods') }}"> Delivery Methods</a></li>
                                    <li><a href="{{ Route('Confirmation') }}"> Confirmation </a></li>
                                    <li><a href="{{ Route('CheckoutSuccessful') }}"> Checkout Successful </a></li>
                                    <li><a href="{{ Route('Error404') }}"> Error404 </a></li>
                                    <li><a href="{{ Route('Contact') }}"> Contact </a></li>
                                    <li class="dropdown-submenu"><a href="#."> Dropdown Level </a>
                                        <ul class="dropdown-menu animated-2s fadeInRight">
                                            <li><a href="#.">Level 1</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Mega Menu Nav -->
                            <li class="dropdown megamenu"> <a href="index-2.html" class="dropdown-toggle"
                                    data-toggle="dropdown">Mega menu </a>
                                <div class="dropdown-menu animated-2s fadeInUpHalf">
                                    <div class="mega-inside">
                                        <div class="top-lins">
                                            <ul>
                                                <li><a href="#."> Cell Phones & Accessories </a></li>
                                                <li><a href="#."> Carrier Phones </a></li>
                                                <li><a href="#."> Unlocked Phones </a></li>
                                                <li><a href="#."> Prime Exclusive Phones </a></li>
                                                <li><a href="#."> Accessories </a></li>
                                                <li><a href="#."> Cases </a></li>
                                                <li><a href="#."> Best Sellers </a></li>
                                                <li><a href="#."> Deals </a></li>
                                                <li><a href="#."> All Electronics </a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6>Electronics</h6>
                                                <ul>
                                                    <li><a href="#."> Cell Phones & Accessories </a></li>
                                                    <li><a href="#."> Carrier Phones </a></li>
                                                    <li><a href="#."> Unlocked Phones </a></li>
                                                    <li><a href="#."> Prime Exclusive Phones </a></li>
                                                    <li><a href="#."> Accessories </a></li>
                                                    <li><a href="#."> Cases </a></li>
                                                    <li><a href="#."> Best Sellers </a></li>
                                                    <li><a href="#."> Deals </a></li>
                                                    <li><a href="#."> All Electronics </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6>Computers</h6>
                                                <ul>
                                                    <li><a href="#."> Computers & Tablets</a></li>
                                                    <li><a href="#."> Monitors</a></li>
                                                    <li><a href="#."> Laptops & tablets</a></li>
                                                    <li><a href="#."> Networking</a></li>
                                                    <li><a href="#."> Drives & Storage</a></li>
                                                    <li><a href="#."> Computer Parts & Components</a></li>
                                                    <li><a href="#."> Printers & Ink</a></li>
                                                    <li><a href="#."> Office & School Supplies </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6>Home Appliances</h6>
                                                <ul>
                                                    <li><a href="#."> Refrigerators</a></li>
                                                    <li><a href="#."> Wall Ovens</a></li>
                                                    <li><a href="#."> Cooktops & Hoods</a></li>
                                                    <li><a href="#."> Microwaves</a></li>
                                                    <li><a href="#."> Dishwashers</a></li>
                                                    <li><a href="#."> Washers</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4"> <img class=" nav-img"
                                                    src="{{ asset('assets/images/navi-img.png') }}" alt=""> </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown"> <a href="blog.html" class="dropdown-toggle"
                                    data-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
                                    <li><a href="Blog-2.html">Blog </a></li>
                                    <li><a href="Blog_details.html">Blog Single </a></li>
                                </ul>
                            </li>
                            <li> <a href="shop.html">Buy theme! </a></li>
                        </ul>
                    </div>

                    <!-- NAV RIGHT -->
                    <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong>
                            (+100) 123 456 7890</span> </div>
                </div>
            </nav>
        </header>

        <!-- Slid Sec -->
        <section class="slid-sec">
            @yield('slid-sec')
        </section>

        <!-- Content -->
        <div id="content">
            @yield('content')
        </div>
        <!-- End Content -->

        <!-- Footer -->
        @include('layout.footer')

        <!-- Rights -->
        <div class="rights">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Copyright © 2017 <a href="#." class="ri-li"> SmartTech </a>HTML5 template. All rights
                            reserved</p>
                    </div>
                    <div class="col-sm-6 text-right"> <img src="{{ asset('assets/images/card-icon.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- End Footer -->

        <!-- GO TO TOP  -->
        <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
        <!-- GO TO TOP End -->
    </div>
    <!-- End Page Wrapper -->

    @include('layout.script')

    @section('script')
    @show
