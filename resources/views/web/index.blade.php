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
   @include('web/partials.appointment_form')
    <!-- Quick Appointment Modal Ends /-->
    
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
@include('web/partials.page_preloader')
@include('web/partials.java_scripts') 
</body>
</html>    