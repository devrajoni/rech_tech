<header id="site-header">
    <div id="site-header-inner" class="container">                    
        <div class="wrap-inner clearfix">
            <div id="site-logo" class="clearfix">
                <div id="site-logo-inner">
                    <a href="{{ route('home') }}" rel="home" class="main-logo">
                        <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Zingbox" data-retina="assets/img/logo.png" >
                    </a>
                </div>
            </div><!-- /#site-logo -->

            <div class="mobile-button">
                <span></span>
            </div><!-- /.mobile-button -->

            <nav id="main-nav" class="main-nav">
                <ul id="menu-primary-menu" class="menu">
                    <li class="menu-item menu-item-has-children">
                        <a class="active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a class="down" href="{{ route('frontend.about') }}">About Us</a>
                        <ul class="sub-menu ">
                            <li class="menu-item"><a href="{{ route('frontend.about') }}">About Us</a></li>
                            <li class="menu-item"><a href="{{ route('frontend.pricing') }}">Pricing</a></li>
                            <li class="menu-item"><a href="{{ route('frontend.team') }}">Team</a></li>
                            <li class="menu-item"><a href="{{ route('frontend.faq') }}">FAQ’s</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a class="down" href="{{ route('frontend.service') }}">Services</a>
                        <ul class="sub-menu ">
                            <li class="menu-item"><a href="{{ route('frontend.service') }}">Services</a></li>
                            <li class="menu-item"><a href="{{ route('frontend.service-details') }}">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a class="down" href="{{ route('frontend.project') }}">Project </a>
                        <ul class="sub-menu ">
                            <li class="menu-item"><a href="{{ route('frontend.project') }}">Project</a></li>
                            <li class="menu-item"><a href="{{ route('frontend.project-details') }}">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children" >
                        <a class="down" href="{{ route('frontend.blog') }}">Blog</a>
                        <ul class="sub-menu ">
                            <li class="menu-item"><a href="{{ route('frontend.blog') }}">Blog Standard</a></li>
                            <li class="menu-item"><a href="{{ route('frontend.blog-details') }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ route('frontend.contact') }}">Contact</a>
                    </li>
                </ul>
            </nav><!-- /#main-nav -->
            <div id="header-get-a-quote">
                <a href="contact.html" class="header-get-a-quote-icon">Get A Quote</a>
                <!-- <button class="header-get-a-quote-icon" >Get a Quote</button> -->
            </div><!-- /#header-get-a-quote -->
        </div><!-- /.wrap-inner -->                    
    </div><!-- /#site-header-inner -->
</header>