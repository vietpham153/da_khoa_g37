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
		<?php require_once('./layouts/right_side_bar.php') ?>	  <!-- END SWITCHER -->
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
								    	<li class="breadcrumb-item active" aria-current="page">Dịch vụ y tế</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color" style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;" >Dịch vụ y tế</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	




			<!-- TABS-2
			============================================= -->
			<section id="tabs-2" class="wide-100 tabs-section division">
				<div class="container">	
				 	<div class="row">


				 		<!-- TABS NAVIGATION -->
				 		<div class="col-lg-4">
							<div id="tabs-nav" class="list-group text-center clearfix">
							    <ul class="nav nav-pills" id="pills-tab" role="tablist">

							    	<!-- TAB-1 LINK -->
								  	<li class="nav-item icon-xs">
								    	<a class="nav-link active" id="tab11-list" data-toggle="pill" href="#tab-11" role="tab" aria-controls="tab-11" aria-selected="true">
								    		Routine Medical Care
								    	</a>
								  	</li>

								  	<!-- TAB-2 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab12-list" data-toggle="pill" href="#tab-12" role="tab" aria-controls="tab-12" aria-selected="false">
									       Full Blood Picture
									    </a>
									</li>

									<!-- TAB-3 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab13-list" data-toggle="pill" href="#tab-13" role="tab" aria-controls="tab-13" aria-selected="false">
									       MRI Diagnostic
									    </a>
									</li>

									<!-- TAB-4 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab14-list" data-toggle="pill" href="#tab-14" role="tab" aria-controls="tab-14" aria-selected="false">
									       X-Ray Diagnostic
									    </a>
									</li>

								</ul>

							</div>	
						</div>	<!-- END TABS NAVIGATION -->


						<!-- TABS CONTENT -->
				 		<div class="col-lg-8">
							<div class="tab-content" id="pills-tabContent">


								<!-- TAB-1 CONTENT -->
								<div class="tab-pane fade show active" id="tab-11" role="tabpanel" aria-labelledby="tab11-list">									
									<!-- Title -->
									<h3 class="h3-md steelblue-color">Routine Medical Care</h3>

									<!-- Text -->
									<p>Sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor
									   integer congue magna at pretium  purus pretium ligula rutrum itae laoreet augue in 
									   cubilia laoreet an augue egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice
									   ligula egestas magna suscipit
									</p>

									<!-- Image -->
									<div class="tab-img">
										<img class="img-fluid" src="images/nhikhoa.jpg" alt="tab-image" />
									</div>

									<!-- Text -->
									<p>An enim nullam tempor sapien gravida donec enim ipsum blandit
									   porta justo integer odio velna vitae auctor integer congue magna at pretium 
									   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue 
									   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas 
									   magna suscipit
									</p>

									<!-- Options List -->
									<div class="row">

										<div class="col-xl-6">

											<!-- Option #1 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Nemo ipsam egestas volute and turpis dolores quaerat massa suscipit, luctus neque</p>							
											</div>

											<!-- Option #2 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

											<!-- Option #3 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>An enim nullam tempor at pretium blandit</p>				
											</div>

										</div>

										<div class="col-xl-6">

											<!-- Option #4 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

											<!-- Option #5 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>An enim nullam tempor at pretium blandit</p>							
											</div>

											<!-- Option #6 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

										</div>

									</div>	<!-- End Options List -->

									<!-- Button -->
									<a href="service-1.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

								</div>	<!-- END TAB-1 CONTENT -->


								<!-- TAB-2 CONTENT -->
								<div class="tab-pane fade" id="tab-12" role="tabpanel" aria-labelledby="tab12-list">

									<!-- Title -->
									<h3 class="h3-md steelblue-color">Full Blood Picture</h3>

									<!-- Text -->
									<p>Sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor
									   integer congue magna at pretium  purus pretium ligula rutrum itae laoreet augue in 
									   cubilia laoreet an augue egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice
									   ligula egestas magna suscipit
									</p>

									<!-- Image -->
									<div class="tab-img">
										<img class="img-fluid" src="images/huyethoc.jpg" alt="tab-image" />
									</div>

									<!-- Text -->
									<p>An enim nullam tempor sapien gravida donec enim ipsum blandit
									   porta justo integer odio velna vitae auctor integer congue magna at pretium 
									   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue 
									   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas 
									   magna suscipit
									</p>

									<!-- Options List -->
									<div class="row">

										<div class="col-xl-6">

											<!-- Option #1 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Nemo ipsam egestas volute and turpis dolores quaerat massa suscipit, luctus neque</p>							
											</div>

											<!-- Option #2 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

											<!-- Option #3 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>An enim nullam tempor at pretium blandit</p>				
											</div>

										</div>

										<div class="col-xl-6">

											<!-- Option #4 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

											<!-- Option #5 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>An enim nullam tempor at pretium blandit</p>							
											</div>

											<!-- Option #6 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

										</div>

									</div>	<!-- End Options List -->

									<!-- Button -->
									<a href="service-1.html" class="btn btn-blue blue-hover mt-30">View More Details</a>
										
								</div>	<!-- END TAB-2 CONTENT -->


								<!-- TAB-3 CONTENT -->
								<div class="tab-pane fade" id="tab-13" role="tabpanel" aria-labelledby="tab13-list">

									<!-- Title -->
									<h3 class="h3-md steelblue-color">MRI Diagnostic</h3>

									<!-- Text -->
									<p>Sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor
									   integer congue magna at pretium  purus pretium ligula rutrum itae laoreet augue in 
									   cubilia laoreet an augue egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice
									   ligula egestas magna suscipit
									</p>

									<!-- Image -->
									<div class="tab-img">
										<img class="img-fluid" src="images/mri.jpg" alt="tab-image" />
									</div>

									<!-- Text -->
									<p>An enim nullam tempor sapien gravida donec enim ipsum blandit
									   porta justo integer odio velna vitae auctor integer congue magna at pretium 
									   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue 
									   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas 
									   magna suscipit
									</p>

									<!-- Options List -->
									<div class="row">

										<div class="col-xl-6">

											<!-- Option #1 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Nemo ipsam egestas volute and turpis dolores quaerat massa suscipit, luctus neque</p>							
											</div>

											<!-- Option #2 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

											<!-- Option #3 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>An enim nullam tempor at pretium blandit</p>				
											</div>

										</div>

										<div class="col-xl-6">

											<!-- Option #4 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

											<!-- Option #5 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>An enim nullam tempor at pretium blandit</p>							
											</div>

											<!-- Option #6 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

										</div>

									</div>	<!-- End Options List -->

									<!-- Button -->
									<a href="service-1.html" class="btn btn-blue blue-hover mt-30">View More Details</a>
										
								</div>	<!-- END TAB-3 CONTENT -->


								<!-- TAB-4 CONTENT -->
								<div class="tab-pane fade" id="tab-14" role="tabpanel" aria-labelledby="tab14-list">

									<!-- Title -->
									<h3 class="h3-md steelblue-color">X-Ray Diagnostic</h3>

									<!-- Text -->
									<p>Sapien gravida donec enim ipsum blandit porta justo integer odio velna vitae auctor
									   integer congue magna at pretium  purus pretium ligula rutrum itae laoreet augue in 
									   cubilia laoreet an augue egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice
									   ligula egestas magna suscipit
									</p>

									<!-- Image -->
									<div class="tab-img">
										<img class="img-fluid" src="images/xquang.jpg" alt="tab-image" />
									</div>

									<!-- Text -->
									<p>An enim nullam tempor sapien gravida donec enim ipsum blandit
									   porta justo integer odio velna vitae auctor integer congue magna at pretium 
									   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue 
									   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas 
									   magna suscipit
									</p>

									<!-- Options List -->
									<div class="row">

										<div class="col-xl-6">

											<!-- Option #1 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Nemo ipsam egestas volute and turpis dolores quaerat massa suscipit, luctus neque</p>							
											</div>

											<!-- Option #2 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

											<!-- Option #3 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>An enim nullam tempor at pretium blandit</p>				
											</div>

										</div>

										<div class="col-xl-6">

											<!-- Option #4 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

											<!-- Option #5 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>An enim nullam tempor at pretium blandit</p>							
											</div>

											<!-- Option #6 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus tempor</p>			
											</div>

										</div>

									</div>	<!-- End Options List -->

									<!-- Button -->
									<a href="service-1.html" class="btn btn-blue blue-hover mt-30">View More Details</a>
									
								</div>	<!-- END TAB-4 CONTENT -->


							</div>	<!-- END TABS CONTENT -->


			 			</div>	
				 	</div>     <!-- End row -->	
				</div>     <!-- End container -->	
			</section>	<!-- END TABS-2 -->
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