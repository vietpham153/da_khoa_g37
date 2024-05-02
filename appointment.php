<!DOCTYPE html>
<html lang="en">

<?php
require_once('./check_user.php');
require_once('./layouts/link_css.php');
?>
	<body>
		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loader-wrapper">
			<div id="loader"><div class="loader-inner"></div></div>
		</div>
		<!-- STYLE SWITCHER
		============================================= -->
		<?php require_once('./layouts/right_side_bar.php') ?>
		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
            <?php require_once('./layouts/header.php') ?>
			<!-- END HEADER -->




			<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Đặt lịch hẹn</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color" style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;">Đặt lịch hẹn</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	




			<!-- APPOINTMENT PAGE
			============================================= -->
			<div id="appointment-page" class="wide-60 appointment-page-section division">
				<div class="container">
				 	<div class="row">


				 		<!-- SERVICE DETAILS -->
				 		<div class="col-lg-8">
				 			<div class="txt-block pr-30">

				 				<!-- Title -->
								<h3 class="h3-md steelblue-color">Book an Appointment</h3>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat
								   dolor lacinia cubilia curae integer congue leo metus, primis in orci integer metus mollis
								   faucibus enim. Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien
								   undo pretium purus feugiat dolor impedit magna purus pretium gravida donec ligula massa 
								   gravida donec pretium 
								</p>

								<!-- APPOINTMENT FORM -->
								<div id="appointment-form-holder" class="text-center">
									<form name="appointmentform" class="row appointment-form">

										<!-- Form Select -->
						                <div id="input-department" class="col-md-12 input-department">
						                    <select id="inlineFormCustomSelect1" name="department" class="custom-select department" required>
						                        <option value="">Select Department</option>  
						                      	<option>Pediatrics Department</option>
						                      	<option>Neurology Department</option>
						                      	<option>Haematology Department</option>
						                      	<option>X-Ray Diagnostic Department</option>
						                      	<option>Cardiology Department</option>
						                      	<option>MRI Department</option>
						                      	<option>Laboratory Services</option>
						                      	<option>Other</option>
						                    </select>
						                </div>

						                <!-- Form Select -->
						                <div id="input-doctor" class="col-md-12 input-doctor">
						                    <select id="inlineFormCustomSelect2" name="doctor" class="custom-select doctor" required>
						                        <option value="">Select Doctor</option>  
						                      	<option>Jonathan Barnes D.M.</option>
						                      	<option>Hannah Harper D.M.</option>
						                      	<option>Matthew Anderson D.M.</option>
						                      	<option>Megan Coleman D.M.</option>
						                      	<option>Joshua Elledge D.M.</option>
						                      	<option>Other</option>
						                    </select>
						                </div>

						                 <!-- Form Select -->
						                <div id="input-patient" class="col-md-12 input-patient">
						                    <select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
						                        <option value="">Have You Visited Us Before?*</option>
												<option>New Patient</option>
												<option>Returning Patient</option>
												<option>Other</option>
						                    </select>
						                </div>

						                <!-- Contact Form Input -->
						                <div id="input-date" class="col-lg-12">
						                	<input id="datetimepicker" type="text" name="date" class="form-control date" placeholder="Appointment Date" required> 
						                </div>
				                                            
						                <!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
						                </div>
						                        
						                <div id="input-email" class="col-lg-12">
						                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
						                </div>

						                <div id="input-phone" class="col-lg-12">
						                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
						                </div>						                          
						                        
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..."></textarea>
						                </div> 
						                                            
						                <!-- Contact Form Button -->
						                <div class="col-lg-12 form-btn">  
						                	<button type="submit" class="btn btn-blue blue-hover submit">Request an Appointment</button> 
						                </div>
						                                                              
						                <!-- Contact Form Message -->
						                <div class="col-lg-12 appointment-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>  
					                                              
					                </form> 

								</div>	<!-- END APPOINTMENT FORM -->

								<!-- Text -->
								<p class="p-sm grey-color mb-30">* Porta semper lacus cursus, feugiat primis ultrice in ligula risus
								   auctor tempus feugiat dolor lacinia cubilia curae integer congue leo metus, primis in orci 
								   integer metus mollis faucibus enim. Nemo ipsam egestas volute turpis dolores ut aliquam quaerat
								   sodales sapien undo pretium purus
								</p>
								
				 				
				 			</div>
				 		</div>	<!-- END SERVICE DETAILS -->


				 		<!-- SIDEBAR -->
						<aside id="sidebar" class="col-lg-4">


							<!-- TEXT WIDGET -->						
							<div id="txt-widget" class="sidebar-div mb-50">
										
								<!-- Title -->
								<h5 class="h5-sm steelblue-color">The Heart Of Clinic</h5>

								<!-- Head of Clinic -->
								<div class="txt-widget-unit mb-15 clearfix d-flex align-items-center">
								
									<!-- Avatar -->
									<div class="txt-widget-avatar">
										<img src="images/head-of-clinic.jpg" alt="testimonial-avatar">
									</div>

									<!-- Data -->
									<div class="txt-widget-data">
										<h5 class="h5-md steelblue-color">Dr. Jonathan Barnes</h5>	
										<span>Chief Medical Officer, Founder</span>	
										<p class="blue-color">1-800-1234-567</p>	
									</div>

								</div>	<!-- End Head of Clinic -->	
								
								<!-- Text -->
								<p class="p-sm">An enim nullam tempor sapien at gravida donec pretium ipsum porta justo
								   integer at odiovelna vitae auctor integer congue magna purus
								</p>

								<!-- Button -->
								<a href="about.html" class="btn btn-blue blue-hover">Learn More</a>
																		
							</div>	<!-- END TEXT WIDGET -->

								
							<!-- SIDEBAR TABLE -->
							<div class="sidebar-table blue-table sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-md">Working Time</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at
								   tempus feugiat dolor lacinia cursus nulla vitae massa
								</p>

								<!-- Table -->
								<table class="table">
									<tbody>
									    <tr>
									      	<td>Mon – Wed</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 7:00 PM</td>
									    </tr>
									    <tr>
									      	<td>Thursday</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 6:30 PM</td>
									    </tr>
									     <tr>
									      	<td>Friday</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 6:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Sun - Sun</td>
									      	<td>-</td>
									      	<td class="text-right">CLOSED</td>
									   	 </tr>
									  </tbody>
								</table>

								<!-- Title -->
								<h5 class="h5-xs">Need a personal health plan?</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, and feugiat primis ultrice ligula at risus auctor</p>

							</div>	<!-- END SIDEBAR TABLE -->


						</aside>   <!-- END SIDEBAR -->


					</div>	<!-- End row -->	
				</div>	 <!-- End container -->
			</div>	<!-- END APPOINTMENT PAGE -->

            <!-- FOOTER-1
			============================================= -->
			<?php require_once('./layouts/footer.php') ?>
			<!-- END FOOTER-1 -->
		    </div>	<!-- END PAGE CONTENT -->
	        <!-- EXTERNAL SCRIPTS
		    ============================================= -->	
		    <?php require_once('./layouts/link_js.php') ?>
	</body>



</html>	