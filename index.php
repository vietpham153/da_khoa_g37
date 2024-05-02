
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
			  <!-- END SWITCHER -->
		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">
			<!-- HEADER
			============================================= -->
			<?php require_once('./layouts/header.php') ?>
			<!-- END HEADER -->
			<!-- HERO-1
			============================================= -->	
			<section id="hero-1" class="bg-fixed hero-section division" style="background-image: url(./images/hero-1.jpg) !important;
    padding-top: 30px;">
				<div class="container">						
					<div class="row d-flex align-items-center">
						<!-- HERO TEXT -->
						<div class="col-md-8 col-lg-7 col-xl-6">
							<div class="hero-txt mb-40">
								<!-- Title -->
								<h5 class="steelblue-color">Welcome To Our Clinic</h5>
								<h2 class="steelblue-color">Take Care of Your Health</h2>
								<!-- Text -->
								<p class="p-md">Feugiat primis ligula risus auctor egestas augue mauri viverra tortor in
								   iaculis placerat eugiat mauris ipsum in viverra tortor and gravida purus pretium lorem 
								   primis in orci integer mollis
								</p>
								<!-- Button -->
								<a href="about-us.html" class="btn btn-blue blue-hover">More About Clinic</a>										
							</div>
						</div>	<!-- END HERO TEXT -->
						<!-- HERO IMAGE -->
						<div class="col-md-4 col-lg-5 col-xl-6">	
							<div class="hero-1-img text-center">				
								<img class="img-fluid" src="images/hero-1-img.png" alt="hero-image">
							</div>
						</div>
					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END HERO-1 -->
			<!-- ABOUT-1
			============================================= -->
			<section id="about-1" class="about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">
						<!-- ABOUT BOX #1 -->
						<div id="abox-1" class="col-md-6 col-lg-3">
							<div class="abox-1 white-color">
								<!-- Title -->
								<h5 class="h5-md">Working Time</h5>
								<!-- Table -->
								<table class="table white-color">
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
							</div>
						</div>
						<!-- ABOUT BOX #2 -->
						<div id="abox-2" class="col-md-6 col-lg-3">
							<div class="abox-1 white-color">
								<h5 class="h5-md">Doctors Timetable</h5>
								<!-- Text -->
								<p>An magnis nulla dolor at sapien augue erat iaculis purus tempor magna ipsum and
								   vitae a purus primis ipsum magna ipsum
								</p>
								<!-- Button -->
								<a href="timetable.html" class="btn btn-sm btn-tra-white mt-25">View Timetable</a>
							</div>
						</div>
						<!-- ABOUT BOX #3 -->
						<div id="abox-3" class="col-md-6 col-lg-3">
							<div class="abox-1 white-color">
								<!-- Title -->
								<h5 class="h5-md">Appointments</h5>
								<!-- Text -->
								<p>An magnis nulla dolor at sapien augue erat iaculis purus tempor magna ipsum and
								   vitae a purus primis ipsum magna ipsum
								</p>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-tra-white mt-25">Make an Apointment</a>
							</div>
						</div>
						<!-- ABOUT BOX #4 -->
						<div id="abox-4" class="col-md-6 col-lg-3">
							<div class="abox-1 white-color">
								<!-- Title -->
								<h5 class="h5-md">Emergency Cases</h5>
								<!-- Text -->
								<h5 class="h5-lg emergency-call"><i class="fas fa-phone"></i> 1-800-123-4560</h5>
								<p class="mt-20">An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum and
								   vitae a purus primis ipsum magna ipsum
								</p>
							</div>
						</div>
					</div>    <!-- End row -->
				</div>	   <!-- End container -->	
			</section>	<!-- END ABOUT-1 -->
			<!-- DOCTORS-1
			============================================= -->
			<section id="doctors-1" class="wide-40 doctors-section division">
				<div class="container">


			 		<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Our Medical Specialists</h3>	

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus, 
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>
										
						</div> 
					</div>	 <!-- END SECTION TITLE -->	


					<div class="row">


						<!-- DOCTOR #1 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">								
														
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
									<img class="img-fluid" src="images/doctor-1.jpg" alt="doctor-foto">	
									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctors_list.php" title="">View More Info</a>
									</div> 

								</div>	

								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Jonathan Barnes D.M.</h5>
									<span class="blue-color">Chief Medical Officer</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>	

							</div>								
						</div>	<!-- END DOCTOR #1 -->
						
						
						<!-- DOCTOR #2 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">	
																						
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
									<img class="img-fluid" src="images/doctor-2.jpg" alt="doctor-foto">	
									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>	

								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Hannah Harper D.M.</h5>
									<span class="blue-color">Anesthesiologist</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>	

							</div>					
						</div>	<!-- END DOCTOR #2 -->
						
						
						<!-- DOCTOR #3 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">	
																						
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
									<img class="img-fluid" src="images/doctor-3.jpg" alt="doctor-foto">	
									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div>

								</div>		
								
								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Matthew Anderson D.M.</h5>
									<span class="blue-color">Cardiology</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>	

							</div>			
						</div>	<!-- END DOCTOR #3 -->
											
						
						<!-- DOCTOR #4 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">	
																					
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
									<img class="img-fluid" src="images/doctor-4.jpg" alt="doctor-foto">	
									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>		
								
								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Megan Coleman D.M.</h5>
									<span class="blue-color">Neurosurgeon</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>	

							</div>			
						</div>	<!-- END DOCTOR #4 -->


					</div>	    <!-- End row -->


					<!-- ALL DOCTORS BUTTON -->		
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="all-doctors mb-40">
								<a href="all-doctors.html" class="btn btn-blue blue-hover">Meet All Doctors</a>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</section>	<!-- END DOCTORS-1 -->
			<!-- INFO-8
			============================================= -->
			<section id="info-8" class="bg-lightgrey info-section division">


				<!-- TEXT BLOCK -->		
				<div class="container">
					<div class="row d-flex align-items-center">	
						<div class="col-md-7 col-lg-5">
							<div class="txt-block pc-30 white-color wow fadeInUp" data-wow-delay="0.4s">

								<!-- Title -->
								<h4 class="h4-sm">Opening Hours:</h4>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor tempus feugiat
								   dolor lacinia cursus vitae massa
								</p>

								<!-- Table -->
								<table class="table white-color">
									<tbody>
									    <tr>
									      	<td>Mon – Wed</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 7:00 PM</td>
									    </tr>
									     <tr>
									      	<td>Thursday</td>
									      	<td>-</td>
									      	<td class="text-right">9:00 AM - 6:30 PM</td>
									    </tr>
									    <tr>
									      	<td>Friday</td>
									      	<td>-</td>
									      	<td class="text-right">9:00 AM - 6:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Sun - Sun</td>
									      	<td>-</td>
									      	<td class="text-right">Closed</td>
									   	 </tr>
									  </tbody>
								</table>

								<!-- Title -->
								<h5 class="h5-md">Need a personal health plan?</h5>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor tempus feugiat
								   dolor lacinia undo cursus nulla massa suscipit, luctus neque purus ipsum neque dolor primis 
								</p>

							</div>	
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- END TEXT BLOCK -->	


				<!-- INFO-7 IMAGE -->
				<div class="info-8-img text-center"></div>


			</section>	<!-- END INFO-8 -->
			<!-- TABS-1
			============================================= -->
			<section id="tabs-1" class="wide-100 tabs-section division">
				<div class="container">	
				 	<div class="row">
				 		<div class="col-md-12">
				 			

				 			<!-- TABS NAVIGATION -->
							<div id="tabs-nav" class="list-group text-center">
							    <ul class="nav nav-pills" id="pills-tab" role="tablist">

							    	<!-- TAB-1 LINK -->
								  	<li class="nav-item icon-xs">
								    	<a class="nav-link active" id="tab1-list" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
								    		<span class="flaticon-083-stethoscope"></span> Nhi Khoa
								    	</a>
								  	</li>

								  	<!-- TAB-2 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab2-list" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
									       <span class="flaticon-005-blood-donation-3"></span> Huyết Học
									    </a>
									</li>

									<!-- TAB-3 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab3-list" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
									       <span class="flaticon-031-scanner"></span> MRI
									    </a>
									</li>

									<!-- TAB-4 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab4-list" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
									       <span class="flaticon-048-lungs"></span> X-Quang
									    </a>
									</li>

								</ul>

							</div>	<!-- END TABS NAVIGATION -->


							<!-- TABS CONTENT -->
							<div class="tab-content" id="pills-tabContent">


								<!-- TAB-1 CONTENT -->
								<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-1 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="images/nhikhoa.jpg" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-1 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Nhi Khoa</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium 
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue 
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas 
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list m-top-15">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>				
														</div>

														<!-- Option  #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list m-top-15">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>				
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-1.html" class="btn btn-blue blue-hover mt-30">Xem Chi Tiết</a>

											</div>	
										</div>	<!-- END TAB-1 TEXT -->


									</div>
								</div>	<!-- END TAB-1 CONTENT -->


								<!-- TAB-2 CONTENT -->
								<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-2 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-imgs">
												<img class="img-fluid" src="images/huyethoc.jpg" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-2 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Huyết Học</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium 
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue 
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas 
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list m-top-15">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>				
														</div>

														<!-- Option #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list m-top-15">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>				
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-2.html" class="btn btn-blue blue-hover mt-30">Xem Chi Tiết</a>

											</div>	
										</div>	<!-- END TAB-2 TEXT -->

										
									</div>
								</div>	<!-- END TAB-2 CONTENT -->


								<!-- TAB-3 CONTENT -->
								<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-3 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="images/mri.jpg" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-3 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">MRI</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium 
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue 
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas 
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list m-top-15">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>				
														</div>

														<!-- Option #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list m-top-15">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>				
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-1.html" class="btn btn-blue blue-hover mt-30">Xem Chi Tiết</a>

											</div>	
										</div>	<!-- END TAB-3 TEXT -->

										
									</div>
								</div>	<!-- END TAB-3 CONTENT -->


								<!-- TAB-4 CONTENT -->
								<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-4 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="images/xquang.jpg" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-4 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">X-Quang</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium 
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue 
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas 
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list m-top-15">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>				
														</div>

														<!-- Option #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list m-top-15">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>				
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-2.html" class="btn btn-blue blue-hover mt-30">Xem Chi Tiết</a>

											</div>	
										</div>	<!-- END TAB-4 TEXT -->

										
									</div>
								</div>	<!-- END TAB-4 CONTENT -->


							</div>	<!-- END TABS CONTENT -->


			 			</div>	
				 	</div>     <!-- End row -->	
				</div>     <!-- End container -->	
			</section>	<!-- END TABS-1 -->
			<!-- STATISTIC-1
			============================================= -->
			<?php require_once('./layouts/statistic.php') ?>
				 <!-- END STATISTIC-1 -->
			<!-- BANNER-2
			============================================= -->
			<section id="banner-2" class="bg-lightgrey pt-80 banner-section division">
				<div class="bg-scroll bg-inner bg-image division">
					<div class="container white-color">
						<div class="row d-flex align-items-center">
							<!-- CALL TO ACTION IMAGE -->
							<div class="col-lg-5">
								<div class="banner-2-img">
									<img class="img-fluid" src="images/image-05.png" alt="banner-image" />	
								</div>
							</div>
							<!-- BANNER TEXT -->
							<div class="col-lg-6 offset-lg-1">
								<div class="banner-txt pc-30 wow fadeInUp" data-wow-delay="0.4s">
									<!-- Section ID -->	
					 				<span class="steelblue-color">Modern Medicine</span>
									<!-- Title  -->
									<h3 class="steelblue-color">Better Technologies for Better Healthcare</h3>
									<!-- Text -->
									<p class="steelblue-color">Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue
									   egestas suscipit lectus mauris lectus laoreet gestas neque undo luctus feugiat.
									   Aliquam a augue suscipit
								    </p>
								    <!-- Button -->
									<a href="all-doctors.html" class="btn btn-blue grey-hover">View Our Doctors</a>
								</div>
							</div>	<!-- END BANNER TEXT -->
						</div>	  <!-- End row -->
					</div>	   <!-- End container -->
				</div>		<!-- End Inner Background -->		
			</section>	<!-- END BANNER-2 -->
			<!-- FOOTER-1
			============================================= -->
			<?php require_once('./layouts/footer.php') ?>
			<!-- END FOOTER-1 -->
		</div>	<!-- END PAGE CONTENT -->
	<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<?php require_once('./layouts/link_js.php') ?>
		<script>

			$('#rg-form').on('click',function(){
				$('#login').hide();
				$('.modal-backdrop.fade.show').css('display',' none');
				$('#register-form').show();
			})
			// $('#loginBtn').on('click', function(){
    		// $('#register-form').modal('hide'); // Ẩn modal đăng ký
    		// $('#login').modal('show'); // Hiển thị modal đăng nhập
			// });
		</script>
	</body>
</html>	