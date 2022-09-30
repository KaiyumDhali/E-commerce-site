<!DOCTYPE html>
<html>
<head>
	<title></title>
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
                            <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="#">Women’s</a></li>
                            <li><a href="#">Men’s</a></li>
                            <li><a href="{{ url('/shop') }}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/product-details') }}">Product Details</a></li>
                                    <li><a href="{{ url('/shop-cart') }}">Shop Cart</a></li>
                                    <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                                    <li><a href="{{ url('/blog') }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/registration') }}">Register</a>
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
</body>
</html>