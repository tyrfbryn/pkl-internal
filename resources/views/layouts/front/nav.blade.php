<header class="header_area">
    <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand logo_h" href="index.html"><img src="front/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
            <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="{{url('shop')}}">Shop Category</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('single')}}">Single Details</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('checkout')}}">Product Checkout</a></li>
                <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('cart')}}">Shopping Cart</a></li>
                </ul>
                            </li>
            <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('detail')}}">Details</a></li>
                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
            </ul>

            <ul class="nav-shop">
            <li class="nav-item"><button><i class="ti-search"></i></button></li>
            <li class="nav-item"><a href="{{ url('cart') }}"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button></a> </li>
            <li class="nav-item"><a class="button button-header" href="{{url('shop')}}">Buy Now</a></li>
            </ul>
            <div class="dropdown">
                <button class="dropdown-toggle header-meta__btn no-border" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fal fa-user"></i> <!-- Replace with your logo or user icon -->
                    @guest
                    <i class="icon-user"></i>
                    @else
                        {{ Auth::user()->name }}
                    @endguest
                    <i class="fal fa-angle-down"></i>
                </button>
                <div class="dropdown-menu no-border" aria-labelledby="dropdownMenuButton">
                    @guest
                        <button class="dropdown-item" onclick="location.href='wishlist.html'">
                            <i class="fal fa-heart"></i> Wishlist
                        </button>
                        <button class="dropdown-item" onclick="location.href='{{ url('login') }}'">
                            <i class="fal fa-sign-in-alt"></i> Login
                        </button>
                    @else
                        <button class="dropdown-item" onclick="location.href='{{ url('about') }}'">
                            <i class="fal fa-user"></i> Profile
                        </button>
                        <hr>
                        <button class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fal fa-sign-out-alt"></i> Logout
                        </button>
                        <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
        </div>
    </nav>
    </div>
</header>
