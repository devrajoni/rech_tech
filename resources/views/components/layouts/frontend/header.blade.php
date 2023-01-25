<!-- mobile menu start -->
<div class="mobile-menu">
    <nav class="mobile-header primary-menu d-xl-none">
        <div class="header-logo">
            <a href="index.html" class="logo"><img src="{{ asset('frontend/assets/images/logo/01.png') }}" alt="logo"></a>
        </div>
        <div class="header-bar">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <nav class="menu">
        <div class="mobile-menu-area d-xl-none">
            <div class="mobile-menu-area-inner" id="scrollbar">
                <div class="mobile-search">
                    <input type="text" placeholder="Search Here.........">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
                <ul class="m-menu">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.project') }}">Projects</a>
                    </li>
                    <li>
                        <a href="#0">Blog</a>
                        <ul class="m-submenu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('frontend.product') }}">Product
                    </li>
                    <li>
                        <a href="contact-us.html">Contact</a>
                    </li>
                </ul>

                <ul class="social-link-list d-flex flex-wrap">
                    <li><a href="#" class="facebook"><i class=" fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter-sm"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- moboli menu ending -->


<!-- header section start -->
<header class="header-section d-xl-block d-none">
    <div class="header-area">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/01.png') }}" alt="logo"></a>
        </div>
        <div class="main-menu d-none d-xl-block">
            <div class="top">
                <ul class="left">
                    <li>
                        Offices Time : 08:30am - 06:30pm
                    </li>
                    <li>
                        Support : <a href="#">admin@envishare.com</a>
                    </li>
                </ul>
                <ul class="right">
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-futbol"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-wifi"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>

            <ul class="menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('frontend.about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('frontend.project') }}">Project</a>
                </li>
                <li>
                    <a href="{{ route('frontend.product') }}">Product</a>
                    <ul><li><a href="{{ route('frontend.cart') }}">Cart</a></li></ul>
                </li>
                <li>
                    <a href="contact-us.html">Contact</a>
                </li>
            </ul>
        </div>
        <ul class="right-side d-none d-xl-flex">
            <li>
                <div class="post-thumb">
                    <img src="{{ asset('frontend/assets') }}/images/logo/comment.png" alt="header">
                </div>
                <div class="post-content">
                    <span>Have Any Questions?</span>
                    <span>Call +02923 970 466</span>
                </div>
            </li>
            <li>
                <a class="search-start">
                    <i class="fas fa-search"></i>
                </a>
            </li>
            <li class="cart">
                <a href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span>2</span>
                </a>
                <div class="cart-content">
                    <div class="cart-item">
                        <div class="cart-img">
                            <a href="#"><img src="{{ asset('frontend/assets/images/header/shope/01.jpg') }}" alt="cart"></a>
                        </div>
                        <div class="cart-des">
                            <a href="#">Product Title Hore</a>
                            <p>$20.00</p>
                        </div>
                        <div class="cart-btn">
                            <a href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-img">
                            <a href="#"><img src="{{ asset('frontend/assets/images/header/shope/02.jpg') }}" alt="cart"></a>
                        </div>
                        <div class="cart-des">
                            <a href="#">Product Title Hore</a>
                            <p>$20.00</p>
                        </div>
                        <div class="cart-btn">
                            <a href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="cart-bottom">
                        <div class="cart-subtotal">
                            <p>Total: <b class="float-right">$40.00</b></p>
                        </div>
                        <div class="cart-action">
                            <button type="submit" class="button">View cart</button>
                            <button type="submit" class="button">Checkout</button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- header section ending -->