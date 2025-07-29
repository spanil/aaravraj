@include('web/partials.header_section')
<body>
	<!-- Main Container -->
    <div class="main-container">
    
    @include('web/partials.navigation_section')    <!-- Title Section -->
      
        <!-- Content Area Starts -->
       	<div class="content-area module faq" style="margin-top:30px;">
	    	<div class="row">
            
        	<div class="medium-9 small-12 columns">
					<h3>Fill in the Form Below to get appointment</h3>
                    
                    <div class="appointment-form">
                        <form>
                            <div class="row">
                                <div class="medium-6 small-12 columns">
                                    <label>
                                        Your Full Name *
                                        <input type="text" placeholder="Name">
                                    </label>    
                                 </div>
                                 <div class="medium-6 small-12 columns">
                                    <label>
                                        Your Phone# *   
                                        <input type="text" placeholder="Phone">
                                    </label>
                                 </div>
                                 <div class="medium-6 small-12 columns">
                                    <label>
                                        Your Email *
                                        <input type="text" placeholder="Email">
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                    <label>
                                        Preffered Date *
                                        <input type="text" placeholder="">
                                    </label>    
                                </div>
                                <div class="medium-12 columns">
                                    <label>
                                        Select Optometrist
                                        <select>
                                            <option>Select Doctor</option>
                                            <option>Vet 1</option>
                                            <option>Vet 2</option>
                                        </select>
                                    </label>    
                                </div>
                                <div class="medium-12 columns">
                                    <label>
                                        Select Service
                                        <select>
                                            <option>Select Service</option>
                                            <option>Service 1</option>
                                            <option>Service 2</option>
                                        </select>
                                    </label>    
                                </div>
                                <div class="medium-12 columns">
                                    <label>
                                        Your message
                                        <textarea placeholder="Your message" rows="4"></textarea>
                                    </label>    
                                </div>
                                
                                <div class="medium-12 columns">
                                    <button class="primary button" type="submit">Send Form!</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- contact Form ends here. -->
           		</div> <!-- right sidebar ends -->

           	    <div class="medium-3 small-12 columns sidebar">
                
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div><!-- icon side /-->
                        <div class="info-side float-left">
                            <p><strong>Is Lasik Secure?</strong><br>
                            From Last 30 years we are in industy and have honor. <br>
                            123-123-1234
                            </p>
                        </div><!-- info side /-->
                        <div class="clearfix"></div>
                    </div><!-- icon-box /-->
            
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                        </div><!-- icon side /-->
                        <div class="info-side float-left">
                            <p><strong>Special Techniques</strong><br>
                            We are providing special visual teaching techniques to help you grow faster.
                            </p>
                        </div><!-- info side /-->
                        <div class="clearfix"></div>
                    </div><!-- icon-box /-->
                                
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-user-md" aria-hidden="true"></i>
                        </div><!-- icon side /-->
                        <div class="info-side float-left">
                            <p><strong>Qualified Staff</strong><br>
                            Our Qualified best teachers from industry give you best professional Knowledge.
                            </p>
                        </div><!-- info side /-->
                        <div class="clearfix"></div>
                    </div><!-- icon-box /-->
                                                               
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div><!-- icon side /-->
                        <div class="info-side float-left">
                            <p><strong>Get Admission</strong><br>
                            Rush before all seats are reserved for current batch. <br>
                            123-123-1234
                            </p>
                        </div><!-- info side /-->
                        <div class="clearfix"></div>
                    </div><!-- icon-box /-->
                    
            	</div><!-- icon-box ends /-->
            
    	    </div><!-- row / -->
		</div> 	    	
        <!-- Content Area Ends /-->
        @include('web/partials.why_us_section')
        @include('web/partials.appointment_section')
        
        @include('web/partials.footer_section')
        
    </div>
    <!-- Main Container ends /-->    
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
	@include('web/partials.page_preloader')    
    @include('web/partials.java_scripts') 
   
</html>    