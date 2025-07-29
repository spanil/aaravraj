@include('web/partials.header_section')

<body>
	<!-- Main Container -->
    <div class="main-container">
    
    @include('web/partials.navigation_section')
      
 
        <!-- Welcome Message -->
        <div class="welcome-message single-doctor-page module">
        	<div class="row">
            	
                <div class="medium-3 small-12 columns single-doctor sidebar">
                	<img src="{{asset('site/images/help/doctor2.jpg')}}" alt="Best Optometrist" class="thumbnail"/>
                    
                    <div class="widget">
                    	<h2>Dr John Doe Services</h2>
                        
                        <div class="widget-content">
                        	<ul class="menu vertical">
                                <li><a href="#">Eye Infection Care</a></li>
                                <li><a href="#">Computerized Eye Exam</a></li>
                                <li><a href="#">Dry Eyes Treatment</a></li>
                                <li><a href="#">Contract Screening</a></li>
                                <li><a href="#">Post Operative Lasik Care</a></li>
                                <li><a href="#">Free Lense Consultation</a></li>
                                <li><a href="#">Lasik Consultation/Surgery</a></li>
                            </ul>
                        </div><!-- Widget content /-->
                    </div><!-- Widget Ends /-->
                    
                </div><!-- Thumbnail /-->
                
                <div class="medium-6 small-12 columns">
                	<h2>About <span>Dr Jhon Doe</span></h2>
                    <h3>M.Phill From Harvard!</h3>
                    <p>At webful vision clinic we have best optometrist in town who are ready to give you great consultation and advices to get rid of glasses or get new lense of glasses suggestion. Dont delay contact us today so we cna provide you best features.<br/>
                    	At webful vision clinic we have best optometrist in town who are ready to give you great consultation and advices to get rid of glasses or get new lense of glasses suggestion. Dont delay contact us today so we cna provide you best features. Something is better than nothing when there is nothing there is something. Casual system and the digital doctors are just for the smoking kills.</p>                     
                
                    <div class="single-doctor-info">
                        
                        <div class="doctor-info-item">
                            <div class="info-item-inner">
                                <div class="info-item-left">
                                    <h5><strong>Specialty</strong></h5>
                                </div>
                                <div class="info-item-right">
                                    Surgical Optometrist
                                </div><!-- Right Ends /-->
                            </div><!-- Left Ends /-->                         
                        </div>
                                           
                        <div class="doctor-info-item">
                            <div class="info-item-inner">
                                <div class="info-item-left">
                                    <h5><strong>Degrees</strong></h5>
                                </div>
                                <div class="info-item-right">
                                    M.D of Medicien
                                </div><!-- Right Ends /-->
                            </div><!-- Left Ends /-->                         
                        </div>
                        
                        <div class="doctor-info-item">
                            <div class="info-item-inner">
                                <div class="info-item-left">
                                    <h5><strong>Training</strong></h5>
                                </div>
                                <div class="info-item-right">
                                    Lorem Ipsum proin gravida nibh vel velit. 
                                </div><!-- Right Ends /-->
                            </div><!-- Left Ends /-->                         
                        </div>
                        
                        <div class="doctor-info-item">
                            <div class="info-item-inner">
                                <div class="info-item-left">
                                    <h5><strong>Contact Info</strong></h5>
                                </div>
                                <div class="info-item-right">
                                    + 0800 2466 7921
                                </div><!-- Right Ends /-->
                            </div><!-- Left Ends /-->                         
                        </div>
                        
                        <div class="doctor-info-item">
                            <div class="info-item-inner">
                                <div class="info-item-left">
                                    <h5><strong>Work Days</strong></h5>
                                </div>
                                <div class="info-item-right">
                                    Monday to Friday
                                </div><!-- Right Ends /-->
                            </div><!-- Left Ends /-->                         
                        </div>
                        
                    </div><!-- Single Doctor Info Ends /-->
                
                </div><!-- Detail /-->
                
                <div class="medium-3 small-12 columns sidebar">

                   <div class="inner-column">
                        <div class="widget-content">	
                            <div class="inner-heading">
                                <h4>We are here for you</h4>
                            </div>
                             <div class="inner-heading">
                                <h2>Book An Appointment</h2>
                            </div>
                            <div class="appointment-form">
                                <form>
                                	<div class="row">
                                        <div class="medium-6 small-12 columns">
                                            <label>
                                                Name *
                                                <input type="text" placeholder="Name">
                                            </label>    
                                         </div>
                                        <div class="medium-6 small-12 columns">
                                            <label>
                                                Phone# *   
                                                <input type="text" placeholder="Phone">
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
                                            <button class="secondary button" type="submit">Send Form!</button>
                                        </div>
                                	</div>
                                </form>
                    		</div><!-- contact Form ends here. -->
                        </div><!-- Widget Content Ends /-->
                   </div>

        		</div><!-- Side Bar Ends /-->
                
        	</div><!-- Row /-->                        
        </div>
        <!-- Welcome Message Ends /-->
        
        
       <!-- Our Team -->
       <div class="our-team module">
        	<div class="section-title-wrapper row">
            	<div class="section-title">
                	<h2>What <span>Patients Says</span></h2>
                    <p>We have best professional Team to Care your Eyes</p>
                </div>
            </div><!-- Section Title /-->
            
            <div class="row">
            	
            	<div class="testimonial medium-6 small-12 columns">
                    <div class="quote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.</p>
                    </div>
                    <div class="student">
                        <div class="photo">
                            <img src="{{asset('site/images/help/testi2.jpg')}}" alt="testimonial imag" />
                        </div>
                        <p>John Doe</p>
                        <p>Important person, some Company</p>
                    </div>
                </div><!-- TEstimonial /-->
                    
                <div class="testimonial medium-6 small-12 columns">
                    <div class="quote">
                        <p>A quick brown fox jumps over the lazy dog Yeh shaam mastani madhosh kiye jaaye muje dor koi khiche teri orh liye jaye, Once upon a time there was a thirsty crow he flew here and there in search of water but he could not find water anywhere.</p>
                    </div>
                    <div class="student">
                        <div class="photo">
                            <img src="{{asset('site/images/help/testi3.jpg')}}" alt="testimonial imag" />
                        </div>
                        <p>Tina Doe</p>
                        <p>Important person, some Company</p>
                    </div>
                </div><!-- TEstimonial /-->
            
            </div><!-- Row /-->
            
        </div>
       <!-- Our Team Ends /-->
        
               
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