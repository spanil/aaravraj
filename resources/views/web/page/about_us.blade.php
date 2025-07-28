@include('web/partials.header_section')

<body>
	<!-- Main Container -->
    <div class="main-container">
    @include('web/partials.navigation_section')   

        <div class="welcome-message about-us module">
        	<div class="row">
            	
                <div class="medium-6 small-12 columns">
                	<img src="images/help/optometrist-feature.png" alt="Best Optometrist" />
                </div><!-- Thumbnail /-->
                
                <div class="medium-6 small-12 columns">
                	<h2>About <span>Webful Vision</span></h2>
                    <h3>Best Optometrist in town are ready to help you!</h3>
                    <p>At webful vision clinic we have best optometrist in town who are ready to give you great consultation and advices to get rid of glasses or get new lense of glasses suggestion. Dont delay contact us today so we cna provide you best features.</p>
                    <div class="awards">
                    	<img src="images/help/award1.png" alt="Medical award" />
                        <img src="images/help/award2.png" alt="Medical Award" />
                        <blockquote><strong>Dr. John Doe</strong> <br>
                        			Is best Doctor for the Optometrists in Jacksonville. He is really passionate to help patients.
                        </blockquote>
                 </div><!-- awards /-->
                   
                </div><!-- Detail /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Welcome Message Ends /-->
        
        <!-- Content Area -->
        <div class="content-area module">
            <div class="row">
            
                <div class="medium-3 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Is Lasik Secure?</strong><br>
                            From Last 30 years we are in industy and have honor. <br>
                            123-123-1234
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
               	<div class="medium-3 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                           <i class="fa fa-stethoscope" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Advanced Technology</strong><br>
                            We are providing special visual teaching techniques to help you grow faster.
                            </p>
                        </div>
                    <div class="clearfix"></div>
                    </div>
				</div><!-- icon-box ends -->
               
               	<div class="medium-3 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-user-md" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Cooperative Staff</strong><br>
                            Our Qualified best teachers from industry give you best professional Knowledge.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
               	<div class="medium-3 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Get Appointment</strong><br>
                            Rush before all seats are reserved for current batch. <br>
                            123-123-1234
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
            </div>
        </div>
        <!-- Content Area Ends -->
        
        
        @include('web/partials.our_team_section')        
               
        @include('web/partials.appointment_section')
        
        @include('web/partials.footer_section')
        
    </div>
    <!-- Main Container ends /-->
	
    @include('web/partials.appointment_section')
    
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
@include('web/partials.page_preloader')    
    @include('web/partials.java_scripts') 
</html>    