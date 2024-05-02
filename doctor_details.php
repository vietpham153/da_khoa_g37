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
		<?php require_once('./layouts/right_side_bar.php') ?>  <!-- END SWITCHER -->




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<?php require_once('./layouts/header.php') ?>
			<!-- END HEADER -->




			<!-- DOCTOR BREADCRUMBS -->
			<section id="doctor-breadcrumbs" class="bg-fixed doctor-details-section division">	
				<div class="container">
					<div class="row">
						<div class="col-md-7 offset-md-5">
			 				<div class="doctor-data white-color">

			 					<!-- Name -->	
			 					<h2 class="h2-xs">Dr. Matthew Anderson</h2>
			 					<h5 class="h5-md">Neurologist / Epilepsy Specialist / Cardiologist</h5>

							</div>
						</div>
					</div>   <!-- End row -->	
				</div>	  <!-- End container -->
			</section>	<!-- END DOCTOR BREADCRUMBS -->




			<!-- DOCTOR-1 DETAILS -->
			<section id="doctor-1-details" class="doctor-details-section division">	
				<div class="container">
					<div class="row">


						<!-- DOCTOR PHOTO -->
						<div class="col-md-5">
			 				<div class="doctor-photo mb-40">

			 					<!-- Photo -->	
			 					<img class="img-fluid" src="images/doctor-3.jpg" alt="doctor-foto">

			 					<!-- Doctor Info -->
			 					<div class="doctor-info">
									<table class="table table-striped">
										<tbody>
										    <tr>
										      	<td>Degrees</td>
										      	<td>M.D. of Medicine</td>
										    </tr>
										    <tr>
										      	<td>Areas of Expertise</td>
										      	<td><span><i class="fas fa-angle-double-right"></i> Neurology</span>
										      		<span><i class="fas fa-angle-double-right"></i> Immunology</span>
										      		<span><i class="fas fa-angle-double-right"></i> Internal Medicine</span>
										      	</td>
										   	</tr>
										   	<tr>
										      	<td>Language(s)</td>
										      	<td>English / Spanish / German</td>
										   	</tr>
										   	<tr class="last-tr">
										      	<td>Work Days</td>
										      	<td>Tuesday - Thursday</td>
										   	</tr>
										</tbody>
									</table>
								</div>	<!-- End Doctor Info -->

								<!-- Doctor Contacts -->	
			 					<div class="doctor-contacts text-center">
				 					<h4 class="h4-xs"><i class="fas fa-mobile-alt"></i> 1-(800)-569-7890</h4>
									<h4 class="h4-xs blue-color"><i class="fas fa-envelope-open-text"></i> 
										<a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a>
									</h4>
								</div>

								<!-- Buttons -->
								<div class="doctor-photo-btn text-center">
									<a href="appointment.php" class="btn btn-md btn-blue blue-hover">Đặt lịch hẹn với bác sĩ này</a>
									<a href="timetable.html" class="btn btn-md btn-tra-grey grey-hover">Xem thời gian biểu</a>
								</div>

			 				</div>
			 			</div>	<!-- END DOCTOR PHOTO -->


			 			<!-- DOCTOR'S BIO -->
						<div class="col-md-7">
							<div class="doctor-bio">

			 					<!-- Text -->	
						   		<p>Etiam sapien sem magna at vitae pulvinar congue augue egestas pretium neque id viverra
						   		   suscipit egestas magna porta ratione, mollis risus lectus porta rutrum arcu aenean
						   		   primis in augue luctus neque purus ipsum neque dolor primis suscipit in magna dignissim,
						   		   porttitor hendrerit diam
						   		</p>

						   		<!-- Text -->  
								<p>In at mauris vel nisl convallis porta at vitae dui. Nam lacus ligula, vulputate molestie 
								   bibendum quis, aliquet elementum massa. Vestibulum ut sagittis odio. Ac massa lorem. Fusce eu
								   cursus est. Fusce non nulla vitae massa placerat vulputate vel a purus. Aliqum  mullam blandit
								   tempor sapien
								</p>	

						   		<!-- Title -->	
								<h5 class="h5-md blue-color">Education + Trainings</h5>

						   		<!-- Text -->
								<p>Aliqum  mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna vitae
								   auctor congue magna nihil impedit ligula risus. Mauris donec ociis et magnis sapien etiam
								   sapien sem sagittis congue tempor gravida
								</p>

								<!-- Option #1 -->
								<div class="box-list m-top-15">							
									<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
									<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>							
								</div>

								<!-- Option #2 -->
								<div class="box-list">	
									<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
									<p class="p-sm">Magna luctus tempor augue vitae laoreet augue in cubilia risus auctor tempus
									   dolor felis lacinia risus auctor id viverra dolor
									 </p>				
								</div>

								<!-- Option #3 -->
								<div class="box-list">	
									<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
									<p class="p-sm">Ligula risus auctor tempus dolor feugiat, felis lacinia risus interdum auctor 
									   id viverra dolor iaculis luctus 
									</p>				
								</div>	

								<!-- Option #3 -->
								<div class="box-list">	
									<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
									<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>				
								</div>	

								<!-- CERTIFICATES -->	
								<div class="certificates">

									<!-- Title -->	
									<h5 class="h5-md blue-color">Diplomas and Certificates</h5>

									<!-- Certificate Preview -->
									<div class="row">

										<!-- Certificate Image -->
										<div class="col-sm-6 col-lg-4">
											<div class="certificate-image">
												<a class="image-link" href="images/certificate-1.png" title="">
													<img class="img-fluid" src="images/certificate-1.png" alt="certificate-image" />
												</a>
											</div>
										</div>
															
										<!-- Certificate Image -->
										<div class="col-sm-6 col-lg-4">
											<div class="certificate-image">
												<a class="image-link" href="images/certificate-2.png" title="">
													<img class="img-fluid" src="images/certificate-2.png" alt="certificate-image" />
												</a>
											</div>
										</div>
															
										<!-- Certificate Image -->
										<div class="col-sm-6 col-lg-4">
											<div class="certificate-image">
												<a class="image-link" href="images/certificate-3.png" title="">
													<img class="img-fluid" src="images/certificate-3.png" alt="certificate-image" />
												</a>
											</div>
										</div>
															
										<!-- Certificate Image -->
										<div class="col-sm-6 col-lg-4">
											<div class="certificate-image">
												<a class="image-link" href="images/certificate-4.png" title="">
													<img class="img-fluid" src="images/certificate-4.png" alt="certificate-image" />
												</a>
											</div>
										</div>
															
										<!-- Certificate Image -->
										<div class="col-sm-6 col-lg-4">
											<div class="certificate-image">
												<a class="image-link" href="images/certificate-5.png" title="">
													<img class="img-fluid" src="images/certificate-5.png" alt="certificate-image" />
												</a>
											</div>
										</div>
										
									</div>
								</div>	<!-- END CERTIFICATES -->	

							</div>
						</div>	<!-- END DOCTOR BIO -->


					</div>    <!-- End row -->	
				</div>	   <!-- End container -->
			</section>  <!-- END DOCTOR-1 DETAILS -->

            <?php require_once('./layouts/footer.php') ?>
			<!-- END FOOTER-1 -->
		</div>	<!-- END PAGE CONTENT -->
	<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<?php require_once('./layouts/link_js.php') ?>
	</body>
</html>	