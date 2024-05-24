<!DOCTYPE html>
<html lang="en">

<?php
require_once ('./check_user.php');
require_once ('./layouts/link_css.php');
$query = "SELECT staffs_information.*, users.* FROM staffs_information join users on staffs_information.staff_uuid = users.uuid  
ORDER BY staffs_information.created_at LIMIT 4";
$doctor_result = mysqli_query($conn, $query);
?>

<body>
	<!-- PRELOADER SPINNER
		============================================= -->
	<div id="loader-wrapper">
		<div id="loader">
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- STYLE SWITCHER
		============================================= -->
	<?php require_once ('./layouts/right_side_bar.php') ?>
	<!-- END SWITCHER -->
	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">
		<!-- HEADER
			============================================= -->
		<?php require_once ('./layouts/header.php') ?>
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
							<h5 class="steelblue-color">Chào mừng bạn đến với</h5>
							<h2 class="steelblue-color">Đa Khoa G37</h2>
							<!-- Text -->
							<p class="p-md">
								Bệnh viện Đa Khoa G37 là một trong những cơ sở y tế hàng đầu tại Việt Nam,
								cung cấp dịch vụ y tế đa dạng và chất lượng cao. Với đội ngũ y bác sĩ,
								chuyên gia và nhân viên y tế có trình độ, năng lực và tâm huyết,
								G37 cam kết mang đến sự chăm sóc toàn diện và hiệu quả cho mọi bệnh nhân.
								Bệnh viện đặc biệt chú trọng vào việc áp dụng công nghệ y tế tiên tiến và các phương
								pháp điều trị hiện đại nhất để đảm bảo kết quả điều trị tốt nhất cho bệnh nhân.
							</p>
							<!-- Button -->
							<a href="about-us.html" class="btn btn-blue blue-hover">Xem thêm thông tin chi tiết</a>
						</div>
					</div> <!-- END HERO TEXT -->
					<!-- HERO IMAGE -->
					<div class="col-md-4 col-lg-5 col-xl-6">
						<div class="hero-1-img text-center">
							<img class="img-fluid" src="./images/hero-1-img.png" alt="hero-image">
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END HERO-1 -->
		<!-- ABOUT-1
			============================================= -->
		<section id="about-1" class="about-section division">
			<div class="container">
				<div class="row d-flex align-items-center">
					<!-- ABOUT BOX #1 -->
					<div id="abox-1" class="col-md-6 col-lg-3">
						<div class="abox-1 white-color">
							<!-- Title -->
							<h5 class="h5-md">Giờ làm việc</h5>
							<!-- Table -->
							<table class="table white-color">
								<tbody>
									<tr>
										<td>Thứ 2-Thứ 6</td>
										<td> - </td>
										<td class="text-right">7:00 AM - 7:00 PM</td>
									</tr>
									<tr>
										<td>Thứ 7</td>
										<td> - </td>
										<td class="text-right">7:00 AM - 5:00 PM</td>
									</tr>
									<tr class="last-tr">
										<td>Chủ nhật</td>
										<td>-</td>
										<td class="text-right">Đóng cửa</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- ABOUT BOX #2 -->
					<div id="abox-2" class="col-md-6 col-lg-3">
						<div class="abox-1 white-color">
							<h5 class="h5-md">Lịch làm việc của bác sĩ</h5>
							<!-- Text -->
							<p>Tại đây các bạn có thể xem lịch làm việc của từng bác sĩ để có thể dễ dàng cho việc khám
								chữa bệnh
							</p>
							<!-- Button -->
							<a href="timetable.php" class="btn btn-sm btn-tra-white mt-25">Xem lịch</a>
						</div>
					</div>
					<!-- ABOUT BOX #3 -->
					<div id="abox-3" class="col-md-6 col-lg-3">
						<div class="abox-1 white-color">
							<!-- Title -->
							<h5 class="h5-md">Đặt lịch hẹn</h5>
							<!-- Text -->
							<p>G37 cũng luôn chú trọng vào việc nâng cao chất lượng dịch vụ và tạo sự thoải mái,
								tin cậy cho người bệnh trong mọi quy trình điều trị.
							</p>
							<!-- Button -->
							<a href="appointment.php" class="btn btn-sm btn-tra-white mt-25">Đặt lịch ngay</a>
						</div>
					</div>
					<!-- ABOUT BOX #4 -->
					<div id="abox-4" class="col-md-6 col-lg-3">
						<div class="abox-1 white-color">
							<!-- Title -->
							<h5 class="h5-md">Thông tin liên hệ</h5>
							<!-- Text -->
							<h5 class="h5-lg emergency-call"><i class="fas fa-phone"></i> 093xxxxxxx</h5>
							<p class="mt-20">Liên hệ ngay để nhận tư vấn chăm sóc sức khỏe hoặc có sự cố.
							</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END ABOUT-1 -->
		<!-- DOCTORS-1
			============================================= -->
		<section id="doctors-1" class="wide-40 doctors-section division">
			<div class="container">


				<!-- SECTION TITLE -->
				<div class="row">
					<div class="col-lg-10 offset-lg-1 section-title">

						<!-- Title 	-->
						<h3 class="h3-md steelblue-color">Đội ngũ bác sĩ</h3>

						<!-- Text -->
						<p>Đội ngũ bác sĩ tại G37 là những chuyên gia có kinh nghiệm,
							tận tâm và được đào tạo chuyên sâu, cam kết mang lại sự chăm sóc y tế hàng đầu cho mọi bệnh
							nhân.
						</p>

					</div>
				</div> <!-- END SECTION TITLE -->


				<div class="row">


					<?php
					if ($doctor_result && mysqli_num_rows($doctor_result) > 0) {
						// Duyệt qua từng bản ghi và hiển thị thông tin
						while ($doctor_record = mysqli_fetch_assoc($doctor_result)) { ?>

							<!-- DOCTOR #1 -->
							<div class="col-md-6 col-lg-3">
								<div class="doctor-1">

									<!-- Doctor Photo -->
									<div class="hover-overlay text-center">

										<!-- Photo -->
										<?php if (isset($doctor_record['image'])): ?>
											<img class="img-fluid" src="./images/doctors/<?php echo $doctor_record['image']; ?>"
												width="300" height="300" alt="doctor-foto">
										<?php endif; ?>
										<div class="item-overlay"></div>

										<!-- Profile Link -->
										<div class="profile-link">
											<a class="btn btn-sm btn-tra-white black-hover"
												href="doctor_details.php?staff_uuid=<?php echo $doctor_record['staff_uuid'] ?>"
												title="">Xem thông tin chi tiết</a>
										</div>

									</div>

									<!-- Doctor Meta -->
									<div class="doctor-meta">


										<?php if (isset($doctor_record['last_name']) && isset($doctor_record['first_name'])): ?>
											<h5 class="h5-sm steelblue-color">BS.
												<?php echo $doctor_record['last_name'] . ' ' . $doctor_record['first_name']; ?>
											</h5>
										<?php endif; ?>
										<?php if (isset($doctor_record['description'])): ?>
											<span><?php echo $doctor_record['description']; ?></span>
										<?php endif; ?>

										<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris
											sed
											augue luctus magna dolor luctus ipsum neque
										</p>

									</div>

								</div>
							</div> <!-- END DOCTOR #1 -->


						<?php }
					} else {
						// Nếu không có bản ghi nào được trả về
						echo "Không có dữ liệu.";
					}
					mysqli_free_result($doctor_result);
					?>


				</div> <!-- End row -->


				<!-- ALL DOCTORS BUTTON -->
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="all-doctors mb-40">
							<a href="doctors_list.php" class="btn btn-blue blue-hover">Xem đội ngũ bác sĩ</a>
						</div>
					</div>
				</div>


			</div> <!-- End container -->
		</section> <!-- END DOCTORS-1 -->
		<!-- INFO-8
			============================================= -->
		<section id="info-8" class="bg-lightgrey info-section division">


			<!-- TEXT BLOCK -->
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-7 col-lg-5">
						<div class="txt-block pc-30 white-color wow fadeInUp" data-wow-delay="0.4s">

							<!-- Title -->
							<h4 class="h4-sm">Giờ mở cửa:</h4>

							<!-- Text -->
							<p>Thời gian biểu của bệnh viện Đa Khoa G37
							</p>

							<!-- Table -->
							<table class="table white-color">
								<tbody>
									<tr>
										<td>Thứ 2 - Thứ 6</td>
										<td> - </td>
										<td class="text-right">7:00 AM - 7:00 PM</td>
									</tr>
									<tr>
										<td>Thứ 7</td>
										<td>-</td>
										<td class="text-right">7:00 AM - 6:00 PM</td>
									</tr>
									<tr class="last-tr">
										<td>Chủ nhật</td>
										<td>-</td>
										<td class="text-right">Đóng cửa</td>
									</tr>
								</tbody>
							</table>

							<!-- Title -->
							<h5 class="h5-md"> Bạn cần một kế hoạch sức khỏe cá nhân?</h5>

							<!-- Text -->
							<p>Liên hệ ngay tới tư vấn viên của chúng tôi để biết thêm thông tin chi tiết
								Tel:096xxxxxxx.
							</p>

						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END TEXT BLOCK -->


			<!-- INFO-7 IMAGE -->
			<div class="info-8-img text-center"></div>


		</section> <!-- END INFO-8 -->
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
									<a class="nav-link active" id="tab1-list" data-toggle="pill" href="#tab-1"
										role="tab" aria-controls="tab-1" aria-selected="true">
										<span class="fa-solid fa-stethoscope" style="font-size: 35px;"></span> Nhi Khoa
									</a>
								</li>

								<!-- TAB-2 LINK -->
								<li class="nav-item icon-xs">
									<a class="nav-link" id="tab2-list" data-toggle="pill" href="#tab-2" role="tab"
										aria-controls="tab-2" aria-selected="false">
										<span class="fa-solid fa-droplet" style="font-size: 35px;"></span> Huyết Học
									</a>
								</li>

								<!-- TAB-3 LINK -->
								<li class="nav-item icon-xs">
									<a class="nav-link" id="tab3-list" data-toggle="pill" href="#tab-3" role="tab"
										aria-controls="tab-3" aria-selected="false">
										<span class="fa-solid fa-heartbeat" style="font-size: 35px;"></span> MRI
									</a>
								</li>

								<!-- TAB-4 LINK -->
								<li class="nav-item icon-xs">
									<a class="nav-link" id="tab4-list" data-toggle="pill" href="#tab-4" role="tab"
										aria-controls="tab-4" aria-selected="false">
										<span class="fa-solid fa-lungs" style="font-size: 35px;"></span> X-Quang
									</a>
								</li>

							</ul>

						</div> <!-- END TABS NAVIGATION -->


						<!-- TABS CONTENT -->
						<div class="tab-content" id="pills-tabContent">


							<!-- TAB-1 CONTENT -->
							<div class="tab-pane fade show active" id="tab-1" role="tabpanel"
								aria-labelledby="tab1-list">
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
											<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum
												blandit
												porta justo integer odio velna vitae auctor integer congue magna at
												pretium
												purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an
												augue
												egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula
												egestas
												magna suscipit
											</p>

											<!-- Options List -->
											<div class="row">

												<div class="col-xl-6">

													<!-- Option #1 -->
													<div class="box-list m-top-15">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Nemo ipsam egestas volute and turpis dolores
															quaerat</p>
													</div>

													<!-- Option #2 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Magna luctus tempor</p>
													</div>

													<!-- Option  #3 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">An enim nullam tempor at pretium purus blandit
														</p>
													</div>

												</div>

												<div class="col-xl-6">

													<!-- Option #4 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Magna luctus tempor blandit a vitae suscipit
															mollis</p>
													</div>

													<!-- Option #5 -->
													<div class="box-list m-top-15">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat
														</p>
													</div>

													<!-- Option #6 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">An enim nullam tempor</p>
													</div>

												</div>

											</div> <!-- End Options List -->

											<!-- Button -->
											<a href="service-1.html" class="btn btn-blue blue-hover mt-30">Xem Chi
												Tiết</a>

										</div>
									</div> <!-- END TAB-1 TEXT -->


								</div>
							</div> <!-- END TAB-1 CONTENT -->


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
											<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum
												blandit
												porta justo integer odio velna vitae auctor integer congue magna at
												pretium
												purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an
												augue
												egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula
												egestas
												magna suscipit
											</p>

											<!-- Options List -->
											<div class="row">

												<div class="col-xl-6">

													<!-- Option #1 -->
													<div class="box-list m-top-15">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Nemo ipsam egestas volute and turpis dolores
															quaerat</p>
													</div>

													<!-- Option #2 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Magna luctus tempor</p>
													</div>

													<!-- Option #3 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">An enim nullam tempor at pretium purus blandit
														</p>
													</div>

												</div>

												<div class="col-xl-6">

													<!-- Option #4 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Magna luctus tempor blandit a vitae suscipit
															mollis</p>
													</div>

													<!-- Option #5 -->
													<div class="box-list m-top-15">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat
														</p>
													</div>

													<!-- Option #6 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">An enim nullam tempor</p>
													</div>

												</div>

											</div> <!-- End Options List -->

											<!-- Button -->
											<a href="service-2.html" class="btn btn-blue blue-hover mt-30">Xem Chi
												Tiết</a>

										</div>
									</div> <!-- END TAB-2 TEXT -->


								</div>
							</div> <!-- END TAB-2 CONTENT -->


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
											<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum
												blandit
												porta justo integer odio velna vitae auctor integer congue magna at
												pretium
												purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an
												augue
												egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula
												egestas
												magna suscipit
											</p>

											<!-- Options List -->
											<div class="row">

												<div class="col-xl-6">

													<!-- Option #1 -->
													<div class="box-list m-top-15">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Nemo ipsam egestas volute and turpis dolores
															quaerat</p>
													</div>

													<!-- Option #2 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Magna luctus tempor</p>
													</div>

													<!-- Option #3 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">An enim nullam tempor at pretium purus blandit
														</p>
													</div>

												</div>

												<div class="col-xl-6">

													<!-- Option #4 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Magna luctus tempor blandit a vitae suscipit
															mollis</p>
													</div>

													<!-- Option #5 -->
													<div class="box-list m-top-15">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat
														</p>
													</div>

													<!-- Option #6 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">An enim nullam tempor</p>
													</div>

												</div>

											</div> <!-- End Options List -->

											<!-- Button -->
											<a href="service-1.html" class="btn btn-blue blue-hover mt-30">Xem Chi
												Tiết</a>

										</div>
									</div> <!-- END TAB-3 TEXT -->


								</div>
							</div> <!-- END TAB-3 CONTENT -->


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
											<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum
												blandit
												porta justo integer odio velna vitae auctor integer congue magna at
												pretium
												purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an
												augue
												egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula
												egestas
												magna suscipit
											</p>

											<!-- Options List -->
											<div class="row">

												<div class="col-xl-6">

													<!-- Option #1 -->
													<div class="box-list m-top-15">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Nemo ipsam egestas volute and turpis dolores
															quaerat</p>
													</div>

													<!-- Option #2 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Magna luctus tempor</p>
													</div>

													<!-- Option #3 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">An enim nullam tempor at pretium purus blandit
														</p>
													</div>

												</div>

												<div class="col-xl-6">

													<!-- Option #4 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Magna luctus tempor blandit a vitae suscipit
															mollis</p>
													</div>

													<!-- Option #5 -->
													<div class="box-list m-top-15">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat
														</p>
													</div>

													<!-- Option #6 -->
													<div class="box-list">
														<div class="box-list-icon blue-color"><i
																class="fas fa-angle-double-right"></i></div>
														<p class="p-sm">An enim nullam tempor</p>
													</div>

												</div>

											</div> <!-- End Options List -->

											<!-- Button -->
											<a href="service-2.html" class="btn btn-blue blue-hover mt-30">Xem Chi
												Tiết</a>

										</div>
									</div> <!-- END TAB-4 TEXT -->


								</div>
							</div> <!-- END TAB-4 CONTENT -->


						</div> <!-- END TABS CONTENT -->


					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END TABS-1 -->
		<!-- STATISTIC-1
			============================================= -->
		<?php require_once ('./layouts/statistic.php') ?>
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
								<span class="steelblue-color">Công nghệ y học tiên tiến</span>
								<!-- Title  -->
								<h3 class="steelblue-color">Công nghệ và dịch vụ tốt cho sức khỏe</h3>
								<!-- Text -->
								<p class="steelblue-color">Egestas magna egestas magna ipsum vitae purus ipsum primis in
									cubilia laoreet augue
									egestas suscipit lectus mauris lectus laoreet gestas neque undo luctus feugiat.
									Aliquam a augue suscipit
								</p>
								<!-- Button -->
								<a href="doctors_list.php" class="btn btn-blue grey-hover">Xem đội ngũ bác sĩ</a>
							</div>
						</div> <!-- END BANNER TEXT -->
					</div> <!-- End row -->
				</div> <!-- End container -->
			</div> <!-- End Inner Background -->
		</section> <!-- END BANNER-2 -->
		<!-- FOOTER-1
			============================================= -->
		<?php require_once ('./layouts/footer.php') ?>
		<!-- END FOOTER-1 -->
	</div> <!-- END PAGE CONTENT -->
	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<?php require_once ('./layouts/link_js.php') ?>
	<script>
		$(document).ready(function () {
			$('#rg-form').on('click', function () {
				if ($('#login').hasClass('show')) { // Kiểm tra xem Modal 1 có đang hiển thị không
					// Ẩn Modal 1
					console.log(1);
					$('#login').hide(); // Ẩn Modal login
					$('.modal-backdrop.fade.show').css('display', ' none');
				}

				$('#register-form').show(); // Hiển thị Modal đăng ký
			});

			$('#lg-form').on('click', function () {
				if ($('#register-form').hasClass('show')) { // Kiểm tra xem Modal đăng ký có đang hiển thị không
					// Ẩn Modal đăng ký
					console.log(2);
					$('#register-form').hide();
					$('.modal-backdrop.fade.show').css('display', ' none');
				}

				$('#login').show(); // Hiển thị Modal login
			});
		});



		toastr.options = {
			"closeButton": true,
			"newestOnTop": false,
			"progressBar": true,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}

		// Kiểm tra nếu đã hiển thị thông báo thành công trước đó

		

		// Gán trạng thái hiển thị thông báo thành công
		// localStorage.setItem('success', '1');







	</script>
	<?php
    if (isset($_SESSION['success'])) {
        if (!empty($_SESSION['success']) || $_SESSION['success'] === 2 || $_SESSION['success'] === 3) { ?>
            <script>
                $(document).ready(function onDocumentReady() {
                    <?php if ($_SESSION['success'] === 3) { ?>
                        toastr.success("<?php echo $_SESSION['notification']; ?>"); // Thay đổi thông báo theo yêu cầu của bạn
                    <?php } else { ?>
                        toastr.success("<?php echo $_SESSION['notification']; ?>");
                    <?php } ?>
                });
            </script>
            <?php
            unset($_SESSION['success']);
            unset($_SESSION['notification']);
        }
    }
    if (isset($_SESSION['error'])) {
        if ($_SESSION['error'] === 2) { ?>
            <script>
                $(document).ready(function onDocumentReady() {
                    toastr.error("<?php echo $_SESSION['notification']; ?>");
                });
            </script>
            <?php
            unset($_SESSION['error']);
        }
    }
?>

</body>

</html>

