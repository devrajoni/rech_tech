<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Zingbox – Wind & Solar Energy HTML Template</title>
    
    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/zingbox-icon.css') }}">

    <!-- wow -->
    <link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- owl-carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/owlcarousel/assets/owl.theme.default.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend/assets/owlcarousel/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('frontend/assets/js/owlcarousel.js') }}"></script>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/icon/icon_logo.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/assets/icon/icon_logo2.png') }}">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

</head>

<body class=" sidebar-right header-style-2 topbar-style-1 menu-has-search header-fixed">

<div id="wrapper" class="animsition">
    <div id="page" class="">

        <div id="site-header-wrap">

            <x-layouts.frontend.top-bar />

            <x-layouts.frontend.header />

        </div>

        <!-- Main Content -->
        {{$slot}}
        <!-- /#main-content -->


        <x-layouts.frontend.footer />
        
        <x-layouts.frontend.bottom />

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/animsition.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/countto.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.cookie.js')}}"></script>
<script src="{{ asset('frontend/assets/js/shortcodes.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('frontend/assets/includes/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/rev-slider.js') }}"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('frontend/assets/includes/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- WOW -->
<script src="{{ asset('frontend/assets/js/wow.js') }}"></script>

<!-- SWIPER -->
<script src="{{ asset('frontend/assets/js/swiper.js') }}"></script>

<!-- <script src="img.js"></script> -->

</body>
</html>

