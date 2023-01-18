<footer id="footer" class="style-1 clearfix">
    <img class="bg-right" src="{{ asset('frontend/assets/img/bg-footer-2.png') }}" alt="Image">
    <div id="footer-widgets" class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_text">
                    <div class="textwidget">
                        <img src="{{ asset('frontend/assets/img/logo-dark.png') }}" alt="Image" >
                        <p class="margin-bottom-15">REES TECH operates with a well-thought-out plan based on scientific foundations to provide you with solar energy solutions with more accuracy and lower cost.To contact our experts, please send an e-mail with your inquiry</p>
                        <div class="footer-socials">
                            <div class="inner">                               
                                <span class="icons">
                                    <a class="active" href="#"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a> 
                                </span>
                            </div>
                        </div><!-- /.footer-socials -->
                    </div>
                </div><!-- /.widget_text -->
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>
            </div><!-- /.col -->                 
            <div class="col-lg-2 col-md-6">
                <div class="themesflat-spacer clearfix" data-desktop="10" data-mobile="0" data-smobile="50"></div>
                <div class="widget widget_services">
                    <h3 class="widget-title margin-bottom-30">Services</h3>
                    <ul class="service-list">
                        <li><a href="{{ route('frontend.service-details') }}">Conditions</a></li>
                        <li><a href="{{ route('frontend.service-details') }}">Terms of Use</a></li>
                        <li><a href="{{ route('frontend.service') }}">Our Services</a></li>
                        <li><a href="{{ route('frontend.blog') }}">New Guests List</a></li>
                        <li><a href="{{ route('frontend.team') }}">The Team List</a></li>
                    </ul>
                </div>
            </div><!-- /.col -->

            <div class="col-lg-4 col-md-6">
                <div class="themesflat-spacer clearfix" data-desktop="10" data-mobile="50" data-smobile="50"></div>

                <div class="widget widget_Latest-post">
                    <h3 class="widget-title">Latest Post</h3>
                    <ul class="lastest-posts data-effect clearfix">
                        <li class="clearfix">
                            <div class="thumb ">
                                <img src="{{ asset('frontend/assets/img/post/recent-new-4.jpg') }}" alt="Image" >
                            </div>
                            <div class="text">
                                <span class="post-date">December 7, 2021</span>
                                <h4><a href="{{ route('frontend.blog') }}">Bigg Ideas Of Business
                                    branding Info.</a></h4>                                       
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="thumb ">
                                <img src="{{ asset('frontend/assets/img/post/recent-new-5.jpg') }}" alt="Image" >
                            </div>
                            <div class="text">
                                <span class="post-date">December 7, 2021</span>
                                <h4><a href="{{ route('frontend.blog') }}">Bigg Ideas Of Business
                                    branding Info.</a></h4>                                        
                            </div>
                        </li>                                
                    </ul>
                </div><!-- /.widget_lastest -->                       
            </div><!-- /.col -->

            <div class=" col-lg-3 col-md-6">
                <div class="themesflat-spacer clearfix" data-desktop="5" data-mobile="50" data-smobile="50"></div>
                <div class="widget widget_email">
                    <h3 class="widget-title margin-bottom-30">Subscribe</h3>
                    <div class="email-form ">
                        <div class="Email">
                            <input type="text" placeholder="Email">
                        </div>
                        <div>
                            <button class="btn-subcriber">Subscribe</button>
                        </div>
                        <span class="tittle-email">Get the latest updates via email. Any time you may unsubscribe</span>
                    </div>
                </div><!-- /.widget_instagram -->
            </div><!-- /.col -->
        </div><!-- /.themesflat-row -->
    </div><!-- /#footer-widgets -->
</footer>