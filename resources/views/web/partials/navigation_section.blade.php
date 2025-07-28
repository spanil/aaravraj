<!-- Top Bar -->
        <div class="topBar">
                <div class="row">
                
                <div class="medium-6 small-12 columns">
                        <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div><!-- Left Column /-->
                
                <div class="medium-6 small-12 columns">
                        <ul class="menu social pull-right">
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                    </ul>
                </div><!-- Left Column /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Top Bar Ends /-->  

           <!-- Header -->
        <div class="header">
                <div class="row">
                
                <div class="medium-4 small-12 columns logo">
                        <a href="index-2.html"><img src="{{ asset('site/images/logo.png') }}" alt="Webful Vision Eye Care" /></a>
                </div><!-- Logo /-->
                
                <div class="medium-8 small-12 columns">
                        
                    <div class="medium-4 small-12 columns medium-offset-5">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p>Our Location<br>
                                        <strong>6th Avenue, NeHoland</strong>
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- Column Ends /-->
                    
                    <div class="medium-4 small-12 columns small-box">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p>Call Us<br>
                                        <strong>+123-123-1234</strong>
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- Column Ends /-->
                    
                </div><!-- Right side /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Header Ends /-->


          <!-- Navigation Starts -->
        <div class="navigation">
                <div class="row">
            
                <!-- navigation Code STarts here.. -->
                <div class="top-bar">
                    <div class="top-bar-title">
                        <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                            <a data-toggle><span class="menu-icon dark float-left"></span></a>
                        </span>
                    </div>
                  
                    <nav id="responsive-menu" class="menu-centered">
                        <ul class="menu vertical medium-horizontal" data-responsive-menu="accordion medium-dropdown">
                            <li class="single-sub parent-nav"><a href="./">Home Page</a>
                                <!-- <ul class="child-nav menu vertical">
                                    <li><a href="index-2.html">Home Version 1</a></li>
                                    <li><a href="index2.html">Home Version 2</a></li>
                                    <li><a href="boxed.html">Boxed Layout</a></li>
                                </ul> -->
                            </li>
                            <li class="single-sub parent-nav"><a href="about-us.html"> Pages </a>
                                <ul class="child-nav menu vertical">
                                    <li><a href="{{route('about-us')}}">About Us</a></li>
                                    <li><a href="{{route('faq')}}">Faq's</a></li>
                                    <!-- <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="price-list.html">Pricing List</a></li>
                                    <li><a href="appointment.html">Appointment</a></li>
                                    <li><a href="404.html">404 Page</a></li>                                          -->
                                </ul>
                            </li>
                            <li class="single-sub parent-nav"><a href="services.html">Services</a>
                                <ul class="child-nav menu vertical">
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('service-detail', ['service-one'])}}">Single Service</a></li>                                        
                                </ul>
                            </li>
                            <li class="single-sub parent-nav"><a href="our-staff.html"> Staff</a>
                                <ul class="child-nav menu vertical">
                                    <li><a href="{{route('staffs')}}">Our Staff</a></li>
                                    <li><a href="{{route('staff-detail',['hari-hari'])}}">Single Doctor</a></li>                                        
                                </ul>
                            </li>
                            <li class="single-sub parent-nav">
                                <a href="appointment.html">Appointment</a>
                            </li>
                            <li class="single-sub parent-nav"><a href="shop.html">Shop</a>
                                <ul class="child-nav menu vertical"> 
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                 </ul>
                            </li>
                            <li class="single-sub parent-nav"><a href="blog.html">Blog</a>
                                <ul class="child-nav menu vertical">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-post.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li class="single-sub parent-nav"><a href="contact.html">Contact</a></li>
                        </ul>
                        </nav>
                </div><!-- top-bar Ends -->
                <!-- Navigation Code Ends here -->
                
            </div><!-- Row Ends /-->
        </div>
        <!-- Navigation Ends /-->