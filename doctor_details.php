<!DOCTYPE html>
<html lang="en">
<?php
require_once ('./check_user.php');
require_once ('./layouts/link_css.php');
require_once ('./modal_timetable.php');
$staff_uuid = $_GET['staff_uuid'];
$query = "SELECT staffs_information.*, users.* FROM staffs_information join users on staffs_information.staff_uuid = users.uuid  
WHERE staffs_information.staff_uuid= '$staff_uuid'";
$doctor_details = mysqli_query($conn, $query);
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
	<?php require_once ('./layouts/right_side_bar.php') ?> <!-- END SWITCHER -->




	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">




		<!-- HEADER
			============================================= -->
		<?php require_once ('./layouts/header.php') ?>
		<!-- END HEADER -->




		<!-- DOCTOR BREADCRUMBS -->
		<section id="doctor-breadcrumbs" class="bg-fixed doctor-details-section division">
			<div class="container">
				<div class="row">
					<?php
					if ($doctor_details && mysqli_num_rows($doctor_details) > 0) {
						// Duyệt qua từng bản ghi và hiển thị thông tin
						while ($details_record = mysqli_fetch_assoc($doctor_details)) { ?>
							<div class="col-md-7 offset-md-5">
								<div class="doctor-data white-color">

									<!-- Name -->
									<?php if (isset($details_record['last_name']) && isset($details_record['first_name'])): ?>
										<h2 class="h2-xs">BS.
											<?php echo $details_record['last_name'] . ' ' . $details_record['first_name']; ?>
										</h2>
									<?php endif; ?>
									<h5 class="h5-md">Neurologist / Epilepsy Specialist / Cardiologist</h5>


								</div>
							</div>
						</div> <!-- End row -->
					</div> <!-- End container -->
				</section> <!-- END DOCTOR BREADCRUMBS -->




				<!-- DOCTOR-1 DETAILS -->
				<section id="doctor-1-details" class="doctor-details-section division">
					<div class="container">
						<div class="row">




							<!-- DOCTOR PHOTO -->
							<div class="col-md-5">
								<div class="doctor-photo mb-40">

									<!-- Photo -->
									<?php if (isset($details_record['image'])): ?>
										<img class="img-fluid" src="./images/doctors/<?php echo $details_record['image']; ?>"
											width="300" height="300" alt="doctor-foto">
									<?php endif; ?>


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
									</div> <!-- End Doctor Info -->

									<!-- Doctor Contacts -->
									<div class="doctor-contacts text-center">
										<h4 class="h4-xs"><i class="fas fa-mobile-alt"></i> 1-(800)-569-7890</h4>
										<h4 class="h4-xs blue-color"><i class="fas fa-envelope-open-text"></i>
											<a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a>
										</h4>
									</div>

									<!-- Buttons -->
									<div class="doctor-photo-btn text-center">
										<a href="appointment.php" class="btn btn-md btn-blue blue-hover">Đặt lịch hẹn với bác sĩ
											này</a>
										<button id="btn_timetable" data-toggle="modal" data-target="#modal-detail-assignment"
											data-staff-uuid="<?php echo htmlspecialchars($staff_uuid); ?>"
											class="btn btn-md btn-tra-grey grey-hover">Xem thời gian biểu</button>
									</div>

								</div>
							</div> <!-- END DOCTOR PHOTO -->


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
										bibendum quis, aliquet elementum massa. Vestibulum ut sagittis odio. Ac massa lorem.
										Fusce eu
										cursus est. Fusce non nulla vitae massa placerat vulputate vel a purus. Aliqum mullam
										blandit
										tempor sapien
									</p>

									<!-- Title -->
									<h5 class="h5-md blue-color">Education + Trainings</h5>

									<!-- Text -->
									<p>Aliqum mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna vitae
										auctor congue magna nihil impedit ligula risus. Mauris donec ociis et magnis sapien
										etiam
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
										<p class="p-sm">Magna luctus tempor augue vitae laoreet augue in cubilia risus auctor
											tempus
											dolor felis lacinia risus auctor id viverra dolor
										</p>
									</div>

									<!-- Option #3 -->
									<div class="box-list">
										<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
										<p class="p-sm">Ligula risus auctor tempus dolor feugiat, felis lacinia risus interdum
											auctor
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
														<img class="img-fluid" src="images/certificate-1.png"
															alt="certificate-image" />
													</a>
												</div>
											</div>

											<!-- Certificate Image -->
											<div class="col-sm-6 col-lg-4">
												<div class="certificate-image">
													<a class="image-link" href="images/certificate-2.png" title="">
														<img class="img-fluid" src="images/certificate-2.png"
															alt="certificate-image" />
													</a>
												</div>
											</div>

											<!-- Certificate Image -->
											<div class="col-sm-6 col-lg-4">
												<div class="certificate-image">
													<a class="image-link" href="images/certificate-3.png" title="">
														<img class="img-fluid" src="images/certificate-3.png"
															alt="certificate-image" />
													</a>
												</div>
											</div>

											<!-- Certificate Image -->
											<div class="col-sm-6 col-lg-4">
												<div class="certificate-image">
													<a class="image-link" href="images/certificate-4.png" title="">
														<img class="img-fluid" src="images/certificate-4.png"
															alt="certificate-image" />
													</a>
												</div>
											</div>

											<!-- Certificate Image -->
											<div class="col-sm-6 col-lg-4">
												<div class="certificate-image">
													<a class="image-link" href="images/certificate-5.png" title="">
														<img class="img-fluid" src="images/certificate-5.png"
															alt="certificate-image" />
													</a>
												</div>
											</div>

										</div>
									</div> <!-- END CERTIFICATES -->

								</div>
							</div> <!-- END DOCTOR BIO -->

						<?php }
					} else {
						// Nếu không có bản ghi nào được trả về
						echo "Không có dữ liệu.";
					}
					?>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END DOCTOR-1 DETAILS -->

		<?php require_once ('./layouts/footer.php') ?>
		<!-- END FOOTER-1 -->
	</div> <!-- END PAGE CONTENT -->
	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<?php require_once ('./layouts/link_js.php') ?>
</body>
<script>
	$('#btn_timetable').on('click', function () {
		var staffUuid = this.getAttribute('data-staff-uuid');
		
		$.ajax({
			url: './timetable_be.php',
			type: 'GET',
			data: {
				staff_uuid: staffUuid,	
			},
			success: function (response) {
				console.log(JSON.parse(response).arr);
				var response = JSON.parse(response);
				var arrExists = response.hasOwnProperty('arr') && Object.keys(response.arr).length > 0;
                var arrShiftExists = response.hasOwnProperty('arr_shift') && Object.keys(response.arr_shift).length > 0;
				console.log(arrExists);
				console.log(arrShiftExists);
                //console.log(arrExists);
                if (arrExists && arrShiftExists) {
                    
						console.log('1');
                    renderData(response); // Gọi hàm để render dữ liệu
                } else {
					console.log('2');
                    $('#assignment-detail-table tbody').empty(); // Xóa dữ liệu cũ trong bảng
                    $('#assignment-detail-table tbody').append('<tr><td colspan="5" class="text-center">Không tìm thấy dữ liệu</td></tr>'); // Thêm thông báo không tìm thấy dữ liệu vào bảng
                }
			},
		});
	})
	function renderData(data) {
		// Xóa dữ liệu cũ trong bảng
		$('#assignment-detail-table tbody').empty();
		$('#assignment-detail-table thead').empty();
		// Thêm dữ liệu mới vào bảng
		var headerRow = $('<tr>').append($('<th>').text('Ca/Thứ')); // Thêm cột cho shift
		$.each(data.arr_day, function (index, item) {

			headerRow.append($('<th>').text(item.name));
		});
		$('#assignment-detail-table thead').append(headerRow);
		$.each(data.arr_shift, function (index, shift) {
			var row = $('<tr>').append($('<td>').text(shift.name)); // Thêm cột cho tên ca làm việc

			// Kiểm tra nếu có dữ liệu phòng cho ca và ngày làm việc
			var hasRoomData = false;
			$.each(data.arr_day, function (index_day, day) {

				if (data.arr[index] && data.arr[index][index_day]) {
					//hasRoomData = true;
					row.append($('<td>').text(data.arr[index][index_day].room));
				} else {
					row.append($('<td>').text('')); // Thêm ô trống
				}
			});

			// Nếu không có dữ liệu phòng cho bất kỳ ca nào, không thêm hàng vào bảng
			//if (hasRoomData) {
			$('#assignment-detail-table tbody').append(row);
			//}
		});
	}

</script>

</html>