@include('web/partials.header_section')

<body>
	<!-- Main Container -->
    <div class="main-container">
    
    @include('web/partials.navigation_section')
       
	         <!-- Content Area Starts -->
             <div class="content-area module single-post-page">
	    	<div class="row">
            	
                <div class="medium-9 small-12 columns content-side">
                	<div class="row">
                    
                    	<div class="medium-12 small-12 columns">
                            <div class="post">
                                <div class="post-thumb">
                                    <a href="single-post.html">
                                        <img src="images/help/blog2.jpg" alt="My Blog post" />
                                    </a>    
                                </div><!-- Thumb /-->
                                <div class="post-content">
                                    <div class="post-meta"><strong>Date:</strong> 20, Dec, 2016 | <strong>Category:</strong> <a href="#">Campus</a> | <strong>Author:</strong> <a href="#">Ateeq</a></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna felis, tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum nisi ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at sodales dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>Proin malesuada metus ac faucibus faucibus.
                                            <ul>
                                                <li>Pellentesque eu enim in erat consequat fermentum.</li>
                                            </ul>
                                        </li>
                                        <li>Pellentesque eu enim in erat consequat fermentum.</li>
                                    </ul>
                                    
                                    <h4>Definition list</h4>

                                    <dl>
                                      <dt>Time</dt>
                                      <dd>The indefinite continued progress of existence and events in the past, present, and future regarded as a whole.</dd>
                                      <dt>Space</dt>
                                      <dd>A continuous area or expanse that is free, available, or unoccupied.</dd>
                                      <dd>The dimensions of height, depth, and width within which all things exist and move.</dd>
                                    </dl>
                            
                                    <blockquote>
                                      Those people who think they know everything are a great annoyance to those of us who do.
                                      <cite>Isaac Asimov</cite>
                                    </blockquote>
                            
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna felis, tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum nisi ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at sodales dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>
                                </div><!-- post content /-->
                            </div><!-- Post /-->
                            
                            <div class="sharing-posts">
                                <div class="medium-10 small-12 columns">
                                    <div class="post-tags">
                                        <ul class="tags">
                                            <li><strong>Tags:</strong></li>
                                            <li><a href="#">Something</a></li>
                                            <li><a href="#">New Tag</a></li>
                                            <li><a href="#">Great Tag</a></li>
                                            <li><a href="#">Blue</a></li>
                                            <li><a href="#">Green</a></li>
                                            <li><a href="#">White</a></li>
                                            <li><a href="#">Red</a></li>
                                        </ul>
                                    </div><!-- Tags /-->
                                </div><!-- Left Side /-->   
                            
                                <div class="medium-2 small-12 columns">
                                    <div class="post-share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                    </div><!-- Social Sharing /-->
                                </div><!-- share post ends -->
                            <div class="clearfix"></div>
                            </div><!-- sharing row Ends -->
                            
                            <div class="author-box">
                                <div class="medium-2 small-2 columns">
                                    <img alt="" src="images/help/author.png" />
                                </div>
                                <div class="medium-10 small-10 columns">
                                    <p><strong>About John Doe</strong><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna felis, tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum nisi ornare eu Cras fringilla.</p>
                                </div>
		                        <div class="clearfix"></div>
        		            </div><!-- author Box ends here -->
                    
		                    <div class="medium-12 columns commentbox">
                                <h3>Leave a reply</h3>
                                <form>
                                    <div class="row">
                                        <div class="medium-6 columns">
                                            <input type="text" placeholder="Name">
                                         </div>
                                         <div class="medium-6 columns">    
                                            <input type="text" placeholder="Email">
                                         </div>
                                         <div class="medium-12 columns">
                                            <input type="text" placeholder="Website">
                                        </div>
                                        <div class="medium-12 columns">
                                            <textarea placeholder="Your comment"></textarea>
                                            <button class="button primary" type="submit">SUbmit comment</button>
                                        </div>
                                    </div>
                                </form>
		                    </div><!-- comment box /-->
                            
                        </div><!-- Post column /-->
                    
                    </div><!-- Row /-->
                    
                </div><!-- left Side Ends /-->
                
                <div class="medium-3 small-12 columns sidebar">
                
                    <div class="widget">
                        <h2>Blog Categories</h2>
                        
                        <div class="widget-content">
                            <ul class="menu vertical">
                                <li><a href="#">Lasik Care</a></li>
                                <li><a href="#">Eye Food/Drinks</a></li>
                                <li><a href="#">Get Eyes like Tiger</a></li>
                                <li><a href="#">Dream Frame</a></li>
                            </ul>
						</div><!-- Widget Content /-->
                    </div><!-- widget ends /-->
                    
                    <div class="widget">
                        <h2>Optometrist Services</h2>
                        
                        <div class="widget-content">
                            <ul class="menu vertical">
                                <li><a href="#">Post Lasik Care</a></li>
                                <li><a href="#">Eye Exam Technology</a></li>
                                <li><a href="#">Dry Eyes Services</a></li>
                                <li><a href="#">Emergency Services</a></li>
                            </ul>
						</div><!-- Widget Content /-->
                    </div><!-- widget ends /-->
                    
                    <div class="widget">
                        <h2>Popular Tags</h2>
                        
                        <div class="widget-content">
                            <ul class="tags">
                                <li><a href="#">Something</a></li>
                                <li><a href="#">New Tag</a></li>
                                <li><a href="#">Great Tag</a></li>
                                <li><a href="#">Blue</a></li>
                                <li><a href="#">Green</a></li>
                                <li><a href="#">White</a></li>
                                <li><a href="#">Red</a></li>
                            </ul>
						</div><!-- Widget Content /-->
                    </div><!-- widget ends /-->
                    
                    <div class="widget">
                        <h2>Popular Posts</h2>
                        
                        <div class="widget-content">
                             <div class="popular-post">
                                <a href="single-post.html"><strong>My new post title come out</strong></a>
                                <p><img alt="" src="images/help/doctor1.jpg" class="float-left" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. <a href="#">Read more...</a></p>
                             </div>
                         
                             <div class="popular-post">
                                <a href="single-post.html"><strong>My new post title come out</strong></a>
                                <p><img alt="" src="images/help/doctor2.jpg" class="float-left" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. <a href="#">Read more...</a></p>
                             </div>
                         
                             <div class="popular-post">
                                <a href="single-post.html"><strong>My new post title come out</strong></a>
                                <p><img alt="" src="images/help/doctor4.jpg" class="float-left" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur vehicula. <a href="#">Read more...</a></p>
                             </div>
						</div><!-- Widget Content /-->                    
                    </div><!-- widget ends /-->
                    
                </div><!-- right bar ends here /-->
            
    	    </div><!-- row / -->
		</div> 	    	

    	<!-- Content Area Ends /-->
		

               
        <!-- Call to Action box -->
        @include('web/partials.appointment_section')
        <!-- Call to Action box ends /-->
        
        <!-- Footer -->
      @include('web/partials.footer_section')
        <!-- Footer Ends here /-->
        
    </div>
    <!-- Main Container ends /-->
	
    <!-- Quick Appointment Modal -->
   @include('web/partials.appointment_form')
    <!-- Quick Appointment Modal Ends /-->
    
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
	<!-- Page Preloader -->
    @include('web/partials.page_preloader')
    @include('web/partials.java_scripts') 
</html>    