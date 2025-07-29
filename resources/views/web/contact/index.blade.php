@include('web/partials.header_section')
<body>
	<!-- Main Container -->
    <div class="main-container">
    
    @include('web/partials.navigation_section')    <!-- Title Section -->
      
        <!-- Content Area Starts -->
        <div class="content-area contact-page" style="margin-top: 30px;">
            <div class="row">
            
               <div class="medium-3 small-12 columns">
                    <img src="images/help/doctor1.jpg" alt="">
                    <br><br>
                    <h4>Meet Us</h4>
                    <p>6th Avenue, NeHoland</p>
                    <h4>Customer Service</h4>
                    <p>Tel: 123-123-1234 (Toll Free Phone)<br> Tel: 123-123-1234 (Local)<br> Fax: 123-123-1234</p>
                    <br>
                    <h4>Follow Us</h4>
                    <div class="socialicons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
               </div><!-- Left Bar Ends /-->
               
               <div class="medium-9 small-12 columns">
               
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12330.695150419098!2d-104.8778931128081!3d39.40888565113789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd61cb55fc2964aec!2sOutlets+at+Castle+Rock!5e0!3m2!1sen!2s!4v1460940151482" height="270" allowfullscreen></iframe>
                    </div><!-- Map Ends /-->
                    
                    <div class="contact-form">
                        <h2>Fill the form below to contact us</h2>
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
                                    <textarea placeholder="Your message" rows="6"></textarea>
                                    <button class="primary button" type="submit">SUbmit comment</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- contact Form Ends /-->
                    
               </div> <!-- Right Side Ends /-->
               
            </div><!-- Row /-->
        </div>    	
        <!-- Content Area Ends /-->
        
        @include('web/partials.appointment_section')
        
        @include('web/partials.footer_section')
        
    </div>
    <!-- Main Container ends /-->
	

    
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
	@include('web/partials.page_preloader')    
    @include('web/partials.java_scripts') 
   
</html>    