@include('web/partials.header_section')
<body>
	<!-- Main Container -->
    <div class="main-container">
    @include('web/partials.navigation_section')
       <!-- Main Banner -->   	
    @include('web/partials.banner_section')
      <!-- Main Banner Ends /-->

     
        
      
        
      
       
        
        <!-- Information Boxes -->
        {{-- @include('web/partials.information_section') --}}
        <!-- INformation Boxes ends /-->
        
        <!-- Welcome Message -->
       @include('web/partials.welcome_message_section')
        <!-- Welcome Message Ends /-->
        
        <!-- Our Services -->
        @include('web/partials.services_section')
        <!-- Our Services /-->
        
        <!-- Our Team -->
        @include('web/partials.our_team_section')
        <!-- Our Team Ends /-->
        
       {{-- @include('web/partials.product_section') --}}

       @include('web/partials.why_us_section')
        
       @include('web/partials.procedure_section')
        
      
       @include('web/partials.news_section') 
       
       {{-- @include('web/partials.partners_section') --}}
        
        @include('web/partials.appointment_section')
        
        @include('web/partials.footer_section')
        
    </div>
    <!-- Main Container ends /-->
	
    <!-- Quick Appointment Modal -->
    <div class="reveal" id="appointment_modal" data-reveal>
        <h2>Get an Appointment</h2>
        <p>Please fill in the form below!</p>
        
        <div class="contact-form row">
        	<div class="medium-6 small-12 columns">
            	<label>
                	<input type="text" placeholder="Your full name..." />
                </label>
                <label>
                	<input type="text" placeholder="Your phone ..." />
                </label>
                <label>
                	<input type="text" placeholder="Your Email ..." />
                </label>
            </div><!-- Left Side Ends /-->
            <div class="medium-6 small-12 columns">
            	<label>
                	<textarea placeholder="Your comments ..." rows="3"></textarea>
                </label>
                <label>
                	<input type="button" class="button primary" value="Submit!" />
                </label>
            </div><!-- Right Side Ends /-->
        </div><!-- Contact Form /-->
    
    </div>
    <!-- Quick Appointment Modal Ends /-->
    
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
	<!-- Page Preloader -->
    <div class="preloader">
        <div class="cssload-thecube">
            
        </div>
	</div>
@include('web/partials.java_scripts') 
</body>
</html>    