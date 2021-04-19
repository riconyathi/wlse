

<head>
    <title>Women Leadership | Just another StartupApp website</title>
    <meta name="Women Leadership | Just another StartupApp website">
    <meta name="author" content="IT-RAYS">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/css/assets.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link id="theme_css" rel="stylesheet" href="{{ asset('assets/css/light.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/layers.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/navigation.css') }}" type="text/css">

    <link id="skin_css" rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}">
    <style type="text/css">
            
        body::-webkit-scrollbar {
          width: 11px;
        }
        body {
          scrollbar-width: thin;
          scrollbar-color: var(--thumbBG) var(--scrollbarBG);
        }
        body::-webkit-scrollbar-track {
          background: var(--scrollbarBG);
        }
        body::-webkit-scrollbar-thumb {
          background-color: #888181;
          border-radius: 6px;
          border: 3px solid #888181;
        }


    
        body {
          height: 100vh;
          overflow-y: auto;
         
        }
        p {
          margin: 0 0 1.5em;
        }
        * {
          box-sizing: border-box;
        }

        .fun-info{
            font-size: 10px;
            font-weight: bold;
        }




    </style>
</head>
<body>

    
    <div class="pageWrapper animsition">

    <!-- top bar start -->
        <div class="top-bar main-bg">
            <div class="container">
                    
                <div class="center-tbl">
                    
                    <ul class="top-info f-left">
                        <li><a href="#" class="shape"><i class="fa fa-envelope"></i>email@domain.com</a></li>
                        <li><span><i class="fa fa-phone"></i> +1 (888) 000-0000</span></li>
                    </ul>
                    
                    <ul class="social-list middle-ul alter-bg shape">
                        <li><a href="#" class="fa fa-dribbble" data-tooltip="true" data-title="dribbble" data-position="bottom"></a></li>
                        <li><a href="#" class="fa fa-facebook" data-tooltip="true" data-title="facebook" data-position="bottom"></a></li>
                        <li><a href="#" class="fa fa-linkedin" data-tooltip="true" data-title="linkedin" data-position="bottom"></a></li>
                        <li><a href="#" class="fa fa-skype" data-tooltip="true" data-title="skype" data-position="bottom"></a></li>
                        <li><a href="#" class="fa fa-twitter" data-tooltip="true" data-title="twitter" data-position="bottom"></a></li>
                    </ul>
                    
                    <ul class="f-right">
                        <li class="dropdown"><a href="#" class="shape" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false" id="login-bx"><i class="fa fa-lock"></i>Login</a>
                            <div class="dropdown-menu  black-bg" style="padding: 1px 16px !important;">
                                <p class="small">Hello our valued visitor, We present you the best web solutions, just login ...</p>
                                
                                <div class="login-controls">
                                    <form action="{{ route('login') }}" method="POST">
                                      @csrf
                                    <div class="form-group">
                                        <input type="email" class="" name="email" placeholder="User name Or Email" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="" name="password" placeholder="Password" required/>
                                    </div>
                                    <div class="form-group floated-controls">
                                        <span class="block checkbox-block"><input type="checkbox" name="remember" class="checkbox" /> <span>Remember Me!</span></span>
                                        <a href="#">Forgot your password ?</a>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn main-bg">Submit</button>
                                        
                                    </div>
                                   
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="shape" data-toggle="modal" data-target="#registermodal"><i class="fa fa-user"></i> Register</a></li>
                        <li><a class="shape" href="sitemap.html"><i class="fa fa-sitemap"></i> Site map</a></li>
                    </ul>
                    
                </div>
                                            
            </div>
        </div>
        <!-- top bar end -->
        <header class="top-head " data-sticky="true">
            <div class="container">
                <!-- Logo start -->
                <div class="logo">
                    <a href="index.html"><img alt="" src="{{ asset('assets/images/logo1.png') }}" style="max-height: 10rem" /></a>
                </div>
                <!-- Logo end -->
                
                <div class="f-right responsive-nav">
                    <!-- top navigation menu start -->
                    <nav class="top-nav nav-animate to-bottom">
                        <ul>
                            <li class="mega-menu selected"><a href="{{ '/' }}">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}">About</a>
                            </li>
                            <li><a href="{{ route('programs.index') }}">Programs</a>
                            </li>
                            <li><a href="{{ route('gallery') }}">Galary</a>

                            </li>
                            <li><a href="{{ route('blog.index') }}">Blog</a>
                            </li>
                            <li><a href="{{ route('vacancies.index') }}">Jobs</a>
                                
                            </li>
                            <li><a href="{{ route('contact.index') }}">Contact</a>
                            </li>
                            
                        
                            </li>
                        </ul>
                    </nav>
                    <!-- top navigation menu end -->
                        
                    <div class="f-right">
                        <!-- top search start -->
                        <div class="top-search">
                            <a href="#" class="main-color"><span class="fa fa-search"></span></a>
                            <div class="search-box">
                                <input type="text" name="t" placeHolder="Type And Hit Enter..." />
                            </div>
                        </div>
                        <!-- top search end -->
                        
                        <!-- cart start -->
                        <div class="top-cart">
                            <a href="#"><span class="fa fa-shopping-cart"></span><i class="cart-num main-bg white">3</i></a>
                            <div class="cart-box">
                                <div class="empty hidden">Your shopping cart is empty!</div>
                                    <div class="mini-cart">
                                        <ul class="mini-cart-list">
                                            <li>
                                                <a class="cart-mini-lft" href="product-left-bar.html"><img src="assets/images/shop/pro-1.jpg" alt=""></a>
                                                <div class="cart-body">
                                                    <a href="product-left-bar.html">Ultimate Fashion Wear White</a>
                                                    <div class="price">$150</div>
                                                </div>
                                                <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                            </li>
                                            <li>
                                                <a class="cart-mini-lft" href="product-left-bar.html"><img src="assets/images/shop/pro-2.jpg" alt=""></a>
                                                <div class="cart-body">
                                                    <a href="product-left-bar.html">Fashion Wear White</a>
                                                    <div class="price">$50</div>
                                                </div>
                                                <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                            </li>
                                            <li>
                                                <a class="cart-mini-lft" href="product-left-bar.html"><img src="assets/images/shop/pro-3.jpg" alt=""></a>
                                                <div class="cart-body">
                                                    <a href="product-left-bar.html">Ultimate Fashion</a>
                                                    <div class="price">$220</div>
                                                </div>
                                                <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                            </li>
                                        </ul>
                                        <div class="mini-cart-total">
                                            <div class="clearfix">
                                                <div class="f-left">Sub-Total:</div>
                                                <div class="f-right">$230.00</div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="f-left">Tax (-10.00):</div>
                                                <div class="f-right">$12.05</div>
                                            </div>
                                            <div class="clearfix total">
                                                <div class="f-left"><strong>Total:</strong></div>
                                                <div class="f-right">$200.20</div>
                                            </div>
                                        </div>
                                        <div class="checkout">
                                            <a class="btn main-bg" href="cart.html">View Cart</a><a class="btn btn-default" href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- cart end -->
                    </div>
                    
                </div>
            </div>
        </header>
        @yield('navigation')