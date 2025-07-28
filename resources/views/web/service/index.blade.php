@include('web/partials.header_section')

<body>
	<!-- Main Container -->
    <div class="main-container">
    @include('web/partials.navigation_section')
        <!-- Content Area -->
	    <div class="content-area single-service module">
		    <div class="row">
            
        		<div class="medium-9 small-12 columns">
                    <div class="block-image">
                        <a href="#">
                            <img alt="" src="images/help/blog1.jpg"  />
                        </a>
                    </div>
                    <div class="block-info">
                        <h2>Computerized Eye Exam</h2>
                        <p>Donec at semper turpis, et commodo quam. Duis eget ex eget mi aliquam lobortis sit amet vitae erat. Pellentesque in enim eleifend, ultricies massa id, sagittis massa. Sed nec mi in mi ultricies rutrum. Sed at mi neque. Pellentesque elementum, enim quis laoreet pellentesque, nisl lorem egestas enim, quis bibendum sapien libero eget dolor. Nullam ut odio eget est dictum fringilla quis sit amet diam. Aliquam fermentum scelerisque turpis, non luctus felis dignissim ut. Vivamus blandit tellus in nisl dignissim sollicitudin. Ut posuere elit in eros mollis, ut congue nibh vehicula. Nam mi felis, convallis in nisi id, sollicitudin volutpat erat. Suspendisse dictum interdum magna, in scelerisque sem aliquet sit amet.</p>

						<p>Vestibulum rutrum efficitur velit, sed auctor risus interdum eu. Ut ullamcorper fringilla pellentesque. Proin ut lorem nec neque vehicula gravida. Morbi finibus dui tellus, tincidunt vulputate nisi convallis at. Phasellus imperdiet, lectus et ullamcorper vulputate, enim tortor facilisis nibh, sed cursus massa dolor eget ipsum. Duis vehicula tempor placerat. Donec sit amet mauris quam. In mauris nunc, tincidunt nec venenatis vel, dictum in tortor. Fusce fermentum convallis eleifend. Vivamus lorem turpis, aliquet eget ultricies sit amet, varius a elit. Maecenas pretium molestie nisi, id gravida neque bibendum non. Curabitur bibendum ultrices imperdiet. Quisque imperdiet sem consectetur, auctor magna a, rhoncus lorem. Proin pulvinar rhoncus tortor, nec sollicitudin ante gravida vel. Praesent posuere interdum dolor cursus mattis. Duis pharetra lectus venenatis, volutpat lacus at, maximus nibh.</p>
                        
                        <p>Vestibulum rutrum efficitur velit, sed auctor risus interdum eu. Ut ullamcorper fringilla pellentesque. Proin ut lorem nec neque vehicula gravida. Morbi finibus dui tellus, tincidunt vulputate nisi convallis at. Phasellus imperdiet, lectus et ullamcorper vulputate enim tortor facilisis nibh, sed cursus massa dolor eget ipsum. Duis vehicula tempor placerat. Donec sit amet mauris quam. In mauris nunc, tincidunt nec venenatis vel, dictum in tortor. Fusce fermentum convallis eleifend. Vivamus lorem turpis, aliquet eget ultricies sit amet, varius a elit.</p>
                    </div>
           		</div><!-- Left section Ends /-->
           
           		<div class="medium-3 small-12 columns sidebar">
                
                	<div class="widget">
                        <h2>Other Services</h2>
                        
                        <div class="widget-content">
                            <ul class="menu vertical">
                                <li><a href="#">Eye Infection Care</a></li>
                                <li><a href="#">Computerized Eye Exam</a></li>
                                <li><a href="#">Dry Eyes Treatment</a></li>
                                <li><a href="#">Contract Screening</a></li>
                                <li><a href="#">Post Operative Lasik Care</a></li>
                                <li><a href="#">Free Lense Consultation</a></li>
                                <li><a href="#">Lasik Consultation/Surgery</a></li>
                                <li><a href="#">Glaucoma Screening</a></li>
                            </ul>
						</div><!-- Widget Content /-->
                    </div><!-- widget ends /-->
                    
           			<div class="widget">
	                	<h2>Book Appointment</h2>
                        <div class="widget-content">
                            <form>
                            <label>                                 
                                <input type="text" placeholder="Your Full Name">
                            </label>    
                            <label>                                    
                                <input type="text" placeholder="Your Phone #">
                            </label>
                            <label>                                 
                                <input type="text" placeholder="Your Email">
                            </label>    
                            <label>                                
                                <input type="text" placeholder="22/04/2016">
                            </label>    
                            <label>                                
                                <select>
                                    <option>Select Doctor</option>
                                    <option>Doctor 1</option>
                                    <option>Doctor 2</option>
                                </select>
                            </label>    
                            <textarea placeholder="Your message" rows="2"></textarea>
                            <button class="primary button" type="submit">SUbmit</button>
                            </form>
                        </div>
                    </div><!-- Widget Ends /-->  
                                     	
           		</div> <!-- Sidebar Ends /-->
           
	        </div><!-- Row Ends /-->
		</div>
    	<!-- Content Area Ends /-->
		
        <!-- Our Team -->
        @include('web/partials.our_team_section')
       <!-- Our Team Ends /-->
               
        <!-- Call to Action box -->
        @include('web/partials.appointment_section')
        <!-- Call to Action box ends /-->        
        @include('web/partials.footer_section')
        <!-- Footer Ends here /-->
        
    </div>
    <!-- Main Container ends /-->
	
    <!-- Quick Appointment Modal -->
    @include('web/partials.appointment_form')
    <!-- Quick Appointment Modal Ends /-->
    
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
    @include('web/partials.page_preloader')
    @include('web/partials.java_scripts') 

</html>    