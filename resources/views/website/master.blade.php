
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-shopper @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css" type="text/css">
</head>

<body>





<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
{{--                        <li><a href="#">Women’s</a></li>--}}
{{--                        <li><a href="#">Men’s</a></li>--}}
                        <li><a href="{{route('shop')}}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{route('details')}}">Product Details</a></li>
                                <li><a href="{{route('card')}}">Shop Cart</a></li>
                                <li><a href="{{route('checkout')}}">Checkout</a></li>
                                <li><a href="{{route('blog.details')}}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('blog.main')}}">Blog</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>

                    <ul class="navbar-nav">


                        @if(Session::get('customer_id'))
                            <a  class="nav-link " ><img src="{{asset(Session::get('customer_image'))}}"   style="height: 50px;width: 50px;" class="rounded"></a>
                            <li class="dropdown">
                                <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Session::get('customer_name')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a href="" class="dropdown-item">Dashboard</a></li>
                                    <li><a href="" class="dropdown-item">Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="" class="nav-link">Login/Registration</a></li>
                        @endif
                    </ul>



            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>


            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        <a href="{{route('login.custom')}}" class="text-dark">Login</a>
                        <a href="{{route('register.custom')}}" class="text-dark">Register</a>
                        <a href="{{route('logout.customer')}}" class="text-dark">logout</a>
                    </div>
                    <ul class="header__right__widget">
                        <li><span class="icon_search search-switch"></span></li>
                        <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
@yield('body')



<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    cilisis.</p>
                    <div class="footer__payment">
                        <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Orders Tracking</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>NEWSLETTER</h6>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.min.js"></script>
<script src="{{asset('/')}}js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}js/jquery-ui.min.js"></script>
<script src="{{asset('/')}}js/mixitup.min.js"></script>
<script src="{{asset('/')}}js/jquery.countdown.min.js"></script>
<script src="{{asset('/')}}js/jquery.slicknav.js"></script>
<script src="{{asset('/')}}js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}js/jquery.nicescroll.min.js"></script>
<script src="{{asset('/')}}js/main.js"></script>
</body>

</html>
